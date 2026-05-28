const { chromium } = require('playwright');
const fs = require('fs');

(async () => {
    console.log('Starting Playwright tests...');
    if (!fs.existsSync('screenshots')) {
        fs.mkdirSync('screenshots');
    }

    const browser = await chromium.launch({ headless: true });
    const context = await browser.newContext();
    const page = await context.newPage();

    // Listen to console logs and errors from the browser
    page.on('console', msg => console.log(`Browser console: ${msg.type()} - ${msg.text()}`));
    page.on('pageerror', error => console.log(`Browser page error: ${error.message}`));

    try {
        console.log('Testing Unauthenticated Access...');
        const res = await page.goto('http://127.0.0.1:8000/');
        console.log(`Homepage Status: ${res.status()}`);
        await page.screenshot({ path: 'screenshots/1-login-page.png' });

        console.log('Attempting Login...');
        await page.fill('input[name="email"]', 'rhubballi4@gmail.com');
        await page.fill('input[name="password"]', '110124');
        await page.click('button[type="submit"]');
        await page.waitForLoadState('networkidle');

        console.log(`URL after login: ${page.url()}`);
        await page.screenshot({ path: 'screenshots/2-dashboard.png' });

        console.log('Testing Create Post textarea...');
        // Try to click into the textarea
        const textarea = page.locator('.create-post-input textarea');
        if (await textarea.count() > 0) {
            await textarea.fill('Hello from Playwright automated test!');
            await page.screenshot({ path: 'screenshots/3-textarea-filled.png' });
            console.log('Filled textarea. Note: No submit button exists in the DOM for this form (FUNC-02).');
        }

        console.log('Testing Unprotected AI Route...');
        // Let's go to the unprotected AI route
        await page.goto('http://127.0.0.1:8000/ai-resume-builder');
        await page.waitForLoadState('networkidle');
        await page.screenshot({ path: 'screenshots/4-ai-builder-unprotected.png' });

        console.log('Testing Phase 1 Dead End...');
        await page.goto('http://127.0.0.1:8000/ai-resume-builder-phase-1');
        await page.waitForLoadState('networkidle');
        await page.screenshot({ path: 'screenshots/5-ai-builder-phase-1-dead-end.png' });

        console.log('Testing Logout Flow...');
        await page.goto('http://127.0.0.1:8000/dashboard');
        await page.waitForLoadState('networkidle');
        
        // Toggle the profile menu to reveal logout
        await page.click('img.nav-profile-img');
        await page.screenshot({ path: 'screenshots/6-profile-menu-open.png' });
        
        // Attempt logout
        console.log('Attempting to click logout...');
        // The logout button is inside a form with class 'profile-menu-link' and has an inline <p> 
        // We can find the button that submits the form
        await page.click('form[action$="/logout"] button[type="submit"]');
        await page.waitForLoadState('networkidle');
        console.log(`URL after logout: ${page.url()}`);
        await page.screenshot({ path: 'screenshots/7-after-logout.png' });

        console.log('All tests finished successfully.');
    } catch (err) {
        console.error('Test script encountered an error:', err);
    } finally {
        await browser.close();
    }
})();
