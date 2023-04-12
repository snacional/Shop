<?php $__env->startSection('content'); ?>
<div class="container-fluid hero-section">
    <div class="container-fluid hero-section d-flex align-items-center">
    <div class="col-4 text-center m-auto bg-black bg-opacity-50 text-white p-5 ">
        <h1 class="mb-4">Our dedication to sustainability</h1>
        <p class="mb-5">Lorem ipsum dolor sit amet consectetur. Commodo pulvinar tortor nunc lectus. Vitae vitae tortor urna sodales mi. </p>
        <button class="btn-dark-green">Shop Now</button>
    </div>
</div>
</div>
<?php if (isset($component)) { $__componentOriginal61ba15efde39a311b2ef4130ac1d3839a18c2eb7 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\ProductList::class, []); ?>
<?php $component->withName('product-list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal61ba15efde39a311b2ef4130ac1d3839a18c2eb7)): ?>
<?php $component = $__componentOriginal61ba15efde39a311b2ef4130ac1d3839a18c2eb7; ?>
<?php unset($__componentOriginal61ba15efde39a311b2ef4130ac1d3839a18c2eb7); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\cells\OneDrive\Desktop\shop\resources\views/home.blade.php ENDPATH**/ ?>