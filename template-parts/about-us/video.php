<?php
$video = get_field('video');
$item = $video['item'];
$image = $video['image'];
?>
<div class="video">
    <?php echo $item; ?>
    <img class="video__img" src="<?php echo $image; ?>" alt="">
    <div class="video__play">
        <div class="video__triangle"></div>
    </div>
    <div class="video__mute">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M11.9993 15.5837C12.5827 16.0003 13.3327 15.667 13.3327 14.917V11.167L10.2493 14.2503L11.9993 15.5837Z" fill="white"></path>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M17.2494 4.41699C16.916 4.08366 16.416 4.08366 16.0827 4.41699L13.3327 7.16699V5.08366C13.3327 4.41699 12.4993 4.00033 11.9993 4.41699L9.66602 6.33366C9.33268 6.50033 8.99935 6.66699 8.58268 6.66699H6.66602C5.74935 6.66699 4.99935 7.41699 4.99935 8.33366V11.667C4.99935 12.5837 5.74935 13.3337 6.66602 13.3337H7.16602L4.41602 16.0837C4.08268 16.417 4.08268 16.917 4.41602 17.2503C4.74935 17.5837 5.24935 17.5837 5.58268 17.2503L17.2494 5.58366C17.5827 5.25033 17.5827 4.75033 17.2494 4.41699Z" fill="white"></path>
        </svg>
    </div>
</div>