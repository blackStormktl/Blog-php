<?php
    require_once("template/header.php");
    // print_r($posts);
?>

<main>
    <div class="title-container">
        <h1>Blog K</h1>
        <p>O seu blog de Programação</p>
    </div>

    <div id="posts-container">
        <?php foreach($posts as $post):?>
            <div class="post-box">
                <img src="<?=$BASE_URL?>/img/<?=$post['img']?>" title="<?=$post['title']?>" alt="<?=$post['title']?>">
                <h2 class="post-title">
                    <a href="<?=$BASE_URL?>post.php?id=<?=$post['id']?>">
                        <?=$post['title']?>
                    </a>
                </h2>

                <p class="post-description">
                    <?=$post['description']?>
                </p>

                <div class="tags-container">
                    <?php foreach($post['tags'] as $tag): ?>
                        <a href="<?=$tag?>"><?=$tag?></a>

                    <?php
                        endforeach;
                    ?>
                </div>
            </div>
        <?php endforeach?>
    </div>
</main>

<h1>Olá Mundo!</h1>

<?php
    require_once("template/footer.php")
?>


