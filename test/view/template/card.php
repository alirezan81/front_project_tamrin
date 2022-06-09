<article class="card evelated">         
    <img class="card-img-top" src="cover/<?php echo $row['cover']; ?>" alt="تصویر کاور">
    <div class="card-body">
        <h3 class="card-title"><?php echo $row['subject']; ?></h3>
        <p class="card-sub-head"><?php echo ($writer['role'] == "admin" ? "ادمین" : "کاربر")." ".($writer['fullname']); ?></p>
        <p class="card-sub-head"><?php echo $row['time']." دقیقه"; ?></p>
        <p class="card-sub-head">پیش نیاز</p>
        <!-- <p class="card-text">محتوا</p> -->
        <div style="text-align:left;">
            <a href="#" class="btn">مطالعه</a>
        </div>
    </div>
</article>
