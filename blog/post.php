<?php
    include_once('template/header.php');


    if(isset($_GET['id'])){
        $postId = $_GET['id'];
        $currentPost;

        foreach($posts as $post){
            if($post['id']==$postId){
                $currentPost = $post;
            }
        }
    }

?>



<main id="post-container">
    <div class="content-container">

        <h1 id="main-title"> 
            <?=$currentPost['title']?>
        </h1>


        <p id="post-description"><?=$currentPost['description']?></p>
       
        <div class="img-container">

            <img src="<?=$BASE_URL?>/img/<?=$currentPost['img']?>" alt="<?=$currentPost['title']?>">
        </div>


        <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis veniam, nobis consequatur non temporibus natus, ad impedit eaque labore quidem dolorem at. Et repellendus cupiditate perspiciatis dolorem, cum sit perferendis.
            Provident quidem vitae non id eveniet temporibus officia, architecto excepturi, sint dolor sequi hic et amet animi! Praesentium ea odit culpa architecto hic facilis, excepturi, omnis id, illo totam numquam!
            Numquam, officiis cum magnam magni voluptates nostrum modi harum maxime fuga, architecto temporibus obcaecati ipsam. Aperiam, enim. Ducimus, voluptatibus corrupti. Autem ducimus quo totam minus, dolore omnis esse quisquam cum?
            Porro, ducimus facilis blanditiis saepe dolores nostrum illum voluptate laudantium veniam iure quis fugiat optio maxime hic consequatur suscipit voluptatem deleniti tenetur officia nobis vero. Ipsa rerum repellendus quisquam officia?
            Ipsa ea eligendi quas, consequatur ipsum eaque quae sint perferendis accusantium vitae? Aperiam libero iste magni tempora eius, quidem illum quo fugiat veritatis dolor numquam impedit quod nulla nesciunt rerum.
        </p>

        <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis veniam, nobis consequatur non temporibus natus, ad impedit eaque labore quidem dolorem at. Et repellendus cupiditate perspiciatis dolorem, cum sit perferendis.
            Provident quidem vitae non id eveniet temporibus officia, architecto excepturi, sint dolor sequi hic et amet animi! Praesentium ea odit culpa architecto hic facilis, excepturi, omnis id, illo totam numquam!
            Numquam, officiis cum magnam magni voluptates nostrum modi harum maxime fuga, architecto temporibus obcaecati ipsam. Aperiam, enim. Ducimus, voluptatibus corrupti. Autem ducimus quo totam minus, dolore omnis esse quisquam cum?
            Porro, ducimus facilis blanditiis saepe dolores nostrum illum voluptate laudantium veniam iure quis fugiat optio maxime hic consequatur suscipit voluptatem deleniti tenetur officia nobis vero. Ipsa rerum repellendus quisquam officia?
            Ipsa ea eligendi quas, consequatur ipsum eaque quae sint perferendis accusantium vitae? Aperiam libero iste magni tempora eius, quidem illum quo fugiat veritatis dolor numquam impedit quod nulla nesciunt rerum.
        </p>

    </div>


<asing id="nav-container">
    <h3 id="tags-title">Tags</h3>
    <ul id="tag-list">
        
    <?php foreach($post['tags'] as $tag):?>
        <li>    
            <a href="#"><?=$tag?></a>
        </li>
        <?php endforeach;?>
        
    </ul>

    <h3 id="categories-title">
        categorias
        </h3>
        <ul id="categories-list">
            <?php
                foreach($categories as $categoria):
            ?>
            <li><a href="#"><?=$categoria?></a></li>
            <?php endforeach;?>
        </ul>

</asing>
</main>


<?php
    include_once('template/footer.php');
?>