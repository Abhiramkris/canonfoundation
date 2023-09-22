document.addEventListener('DOMContentLoaded', function () {
    fetch('data.json')
        .then(response => response.json())
        .then(data => {
            const blogContent = document.getElementById('blog-content');
            data.forEach(post => {
                const postElement = document.createElement('article');
                postElement.innerHTML = `
                    <h2>${post.title}</h2>
                    <p>${post.content}</p>
                    <img src="${post.image}" alt="${post.title}">
                `;
                blogContent.appendChild(postElement);
            });
        })
        .catch(error => console.error('Error loading data:', error));
});
