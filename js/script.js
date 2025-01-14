// Fetch articles from the PHP backend
fetch('php/backend.php')
    .then(response => response.json())
    .then(data => {
        const articlesDiv = document.getElementById('articles');
        data.forEach(article => {
            const articleElement = document.createElement('div');
            articleElement.innerHTML = `<h3>${article.title}</h3><p>${article.content}</p>`;
            articlesDiv.appendChild(articleElement);
        });
    });
