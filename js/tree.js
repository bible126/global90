jQuery(document).ready(function ($) {
    const data = cv_data.content;
    const container = $('#cv-tree-container');

    function buildTree(catPostMap) {
        const ul = $('<ul>');
        const sortedCategories = Object.keys(catPostMap).sort((a, b) => a.localeCompare(b));

        sortedCategories.forEach(catName => {
            const posts = catPostMap[catName];

            const li = $('<li>').text(catName);
            const innerUl = $('<ul>');

            posts.sort((a, b) => a.title.localeCompare(b.title)).forEach(post => {
                innerUl.append($('<li>').text(post.title));
            });

            li.append(innerUl);
            ul.append(li);
        });

        container.html(ul);
    }

    $('#tree-search').on('input', function () {
        const term = $(this).val().toLowerCase();
        $('#cv-tree-container li').each(function () {
            const text = $(this).text().toLowerCase();
            $(this).toggle(text.includes(term));
        });
    });

    buildTree(data.cat_post_map);
});
