<div class="right-sidebar">
    <div class="sidebar-news">
        <img src="images/more.png" class="info-icon">
        <h3>Generate with AI</h3>
        <div class="ai-builder-links">
            <!--button type="button" class="ai-resume-btn" >AI Resume Builder</button-->
            <a href="#" onclick="loadPage('/ai-resume-builder')">📝 AI Resume Builder</a>
                <span>&nbsp;&nbsp;&nbsp; Generate with Ai</span>
            <a href="#">💼 AI Cover Letter Builder</a>
                <span>&nbsp;&nbsp;&nbsp; Build your cover letter</span>
            <a href="#">📝 CV Builder</a>
                <span>&nbsp;&nbsp;&nbsp; Make CV Better</span>
        </div>
    </div>
    <div class="sidebar-ad">
        <small>Ai &middot; &middot; &middot;</small>
        <p>Save time with our Ai builder</p>
            <div>
                <img style="width: 150px;background: rgb(104, 14, 140); border-radius:8%;margin:0px;" src="images/save-time-with-ai-builder.png">
            </div>
            <a href="#" class="ad-link">Learn More</a>
    </div>
</div>

<script>
    // Load initial content when page loads
    window.onload = function() {
        loadPage('/ai-resume-builder');
    };

    function loadPage(url) {
        const loader = document.getElementById('loader');
        //const content = document.getElementById('ai-builder-content')[0];

        // Show loader and clear content
        loader.style.display = 'block';
        fetch(url)
        .then(response => response.text())
        .then(html => {
            loader.style.display = 'none'; // hide loader
            document.getElementById('ai-builder-content').innerHTML = html;      // show content
        })
        .catch(error => {
            loader.style.display = 'none';
            document.getElementById('ai-builder-content').innerHTML = '<p style="color:red;">Error loading content.</p>';
            console.error('Error loading page:', error);
        });
    }
    function aiResumeBuilderPhase1(url) {
        const loader = document.getElementById('loader');
        //const content = document.getElementById('ai-builder-content')[0];

        // Show loader and clear content
        loader.style.display = 'block';
        fetch(url)
        .then(response => response.text())
        .then(html => {
            loader.style.display = 'none'; // hide loader
            document.getElementById('ai-builder-content').innerHTML = html;      // show content
        })
        .catch(error => {
            loader.style.display = 'none';
            document.getElementById('ai-builder-content').innerHTML = '<p style="color:red;">Error loading content.</p>';
            console.error('Error loading page:', error);
        });
    }

    const colorDots = document.querySelectorAll('.color-circle');
    const templates = document.querySelectorAll('.template-preview');

    colorDots.forEach(dot => {
      dot.addEventListener('click', () => {
        // Remove active class from all
        colorDots.forEach(d => d.classList.remove('active'));
        dot.classList.add('active');

        const color = dot.getAttribute('data-color');
        templates.forEach(temp => {
          temp.style.background = color;
        });
      });
    });
</script>