fetch("php/backend.php")
    .then(response => response.json())
    .then(data => {
        const articlesDiv = document.getElementById("articlesDiv");
        data.forEach(article => {
            const articleCard = document.createElement("div");
            articleCard.className = "article-card";
            articleCard.innerHTML = `
                <h3>${article.title}</h3>
                <p>${article.content}</p>
                <div class="buttons">
                    <button class="btn read-more">Read More</button>
                    <button class="btn share">Share</button>
                </div>
            `;
            articlesDiv.appendChild(articleCard);
        });
    })
    .catch(error => console.error("Error fetching articles:", error));
