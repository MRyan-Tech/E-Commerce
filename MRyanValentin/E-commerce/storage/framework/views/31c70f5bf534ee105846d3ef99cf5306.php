<?php $__env->startSection('content'); ?>
<!-- Hero Slider -->
<section class="hero-wrap text-center relative">
    <div id="owl-hero" class="owl-carousel owl-theme light-arrows slider-animated">
        <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="hero-slide overlay" style="background-image:url(/uploads/<?php echo e($slider->gambar); ?>)">
            <div class="container">
                <div class="hero-holder">
                    <div class="hero-message">
                        <h1 class="hero-title nocaps"><?php echo e($slider->nama_slider); ?></h1>
                        <h2 class="hero-subtitle lines"><?php echo e($slider->deskripsi); ?></h2>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</section> <!-- end hero slider -->

<!-- Promo Banners -->
<section class="section-wrap promo-banners pb-30">
    <div class="container">
        <div class="row">

        <?php $__currentLoopData = $categories->take(3); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-xs-4 col-xxs-12 mb-30 promo-banner">
        <a href="#">
            <img src="/uploads/<?php echo e($category->gambar); ?>" alt="" style="width:360px; height:570px; background-color:rgb(105, 105, 105)">
            <div class="overlay"></div>
            <div class="promo-inner valign">
                <h2><?php echo e($category->nama_kategori); ?></h2>
                <span><?php echo e($category->deskripsi); ?></span>
            </div>
        </a>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
    </div>
</section> <!-- end promo banners -->


<!-- Trendy Products -->
<section class="section-wrap-sm new-arrivals pb-50">
    <div class="container">

        <div class="row heading-row">
            <div class="col-md-12 text-center">
                <span class="subheading">Hot items of this year</span>
                <h2 class="heading bottom-line">
                    Handphone Terlaris
                </h2>
            </div>
        </div>

        <div class="row items-grid">
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-3 col-xs-6">
                <div class="product-item hover-trigger">
                    <div class="product-img">
                        <a href="/front/shop-single.html">
                            <img src="/uploads/<?php echo e($product->gambar); ?>" alt="" style=" width:262px; height:350px; background-color:rgb(105, 105, 105)">
                        </a>
                        <div class="hover-overlay">
                            <div class="product-actions">
                                <a href="/front/#" class="product-add-to-wishlist">
                                    <i class="fa fa-heart"></i>
                                </a>
                            </div>
                            <div class="product-details valign">
                                <span class="category">
                                    <a
                                        href="/products/<?php echo e($product->id_subkategori); ?>"><?php echo e($product->subcategory->nama_subkategori); ?></a>
                                </span>
                                <h3 class="product-title">
                                    <a href="/product/<?php echo e($product->id); ?>"><?php echo e($product->nama_barang); ?></a>
                                </h3>
                                <span class="price">
                                    <ins>
                                        <span class="amount">Rp. <?php echo e(number_format($product->harga)); ?></span>
                                    </ins>
                                </span>
                                <div class="btn-quickview">
                                    <a href="/product/<?php echo e($product->id); ?>" class="btn btn-md btn-color">
                                        <span>More</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div> <!-- end row -->
    </div>
</section> <!-- end trendy products -->

<!-- Testimonials -->
<section class="section-wrap relative testimonials bg-parallax overlay"
    style="background-image:url(/front/img/testimonials/testimonial_bg.jpg);">
    <div class="container relative">

        <div class="row heading-row mb-20">
            <div class="col-md-6 col-md-offset-3 text-center">
                <h2 class="heading white bottom-line">Happy Clients</h2>
            </div>
        </div>

        <div id="owl-testimonials" class="owl-carousel owl-theme text-center">
            <?php $__currentLoopData = $testimonies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimony): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <div class="item">
                <div class="testimonial">
                    <p class="testimonial-text"><?php echo e($testimony->deskripsi); ?></p>
                    <span><?php echo e($testimony->nama_testimoni); ?></span>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
    </div>

</section> <!-- end testimonials -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\E-commerce\resources\views/home/index.blade.php ENDPATH**/ ?>