<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package awakening_hosting
 */
global $awakening_hosting;

//echo "<pre>";
//print_r($awakening_hosting['nf-image']['url'] );
?>


<style>

    .error-image {
        background: url('images/error.jpg') no-repeat center center;
        background-size: 100% 100%;
        height: 100vh;
    }
    .error-btn{
        text-align: center;
        position: absolute;
        left: 0;
        right: 0;
        top: 65%;
        margin: auto;

    }
    .btn-back{
        background-image: -moz-linear-gradient( 180deg, rgb(160,0,213) 0%, rgb(19,26,164) 100%);
        background-image: -webkit-linear-gradient( 180deg, rgb(160,0,213) 0%, rgb(19,26,164) 100%);
        background-image: -ms-linear-gradient( 180deg, rgb(160,0,213) 0%, rgb(19,26,164) 100%);
        padding: 24px;
        border-radius: 40px;
        color: #fff;
        font-size: 20px;
        text-transform: uppercase;
        text-decoration: none;

    }
    .btn-back:hover{
        background-image: -moz-linear-gradient( 180deg, rgb(19,26,164) 0%,  rgb(160,0,213) 100%);
        background-image: -webkit-linear-gradient( 180deg, rgb(19,26,164) 0%,rgb(160,0,213) 100%);
        background-image: -ms-linear-gradient( 180deg, rgb(19,26,164) 0%, rgb(160,0,213) 100%);
    }

</style>

    <!-- Error Section Start -->
    <div class="error-image text-center" style="background:url('<?php if (!empty($awakening_hosting['nf-image'])){ echo $awakening_hosting['nf-image']['url'];}?>') no-repeat center center; ">
        <div class="error-btn">
            <a class="btn btn-back" href="<?php echo site_url(); ?>">back to home</a>
        </div>
    </div>
    <!-- Error Section End -->

