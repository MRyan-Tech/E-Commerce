<?php $__env->startSection('title'); ?>
Tentang
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="card shadow">
    <div class="card-header">
        <h4 class="card-title">
            Data tentang
        </h4>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <form class="form-tentang" method="POST" enctype="multipart/form-data" action="/tentang/<?php echo e($about->id); ?>">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label for="">Judul Website</label>
                        <input type="text" class="form-control" name="judul_website" placeholder="Judul Website"
                            required value="<?php echo e($about->judul_website); ?>">
                    </div>
                    <img src="/uploads/<?php echo e($about->logo); ?>" alt="" width="200">
                    <div class="form-group">
                        <label for="">Logo</label>
                        <input type="file" class="form-control" name="logo">
                    </div>
                    <div class="form-group">
                        <label for="">Deskripsi</label>
                        <textarea name="deskripsi" placeholder="Deskripsi" class="form-control" id="" cols="30"
                            rows="10" required><?php echo e($about->deskripsi); ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Alamat</label>
                        <textarea name="alamat" placeholder="Alamat" class="form-control" id="" cols="30" rows="10"
                            required><?php echo e($about->alamat); ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" class="form-control" name="email" placeholder="Email" required
                            value="<?php echo e($about->email); ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Telepon</label>
                        <input type="text" class="form-control" name="telepon" placeholder="Telepon" required
                            value="<?php echo e($about->telepon); ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Atas Nama</label>
                        <input type="text" class="form-control" name="atas_nama" placeholder="Atas Nama" required
                            value="<?php echo e($about->atas_nama); ?>">
                    </div>
                    <div class="form-group">
                        <label for="">No Rekening</label>
                        <input type="text" class="form-control" name="no_rekening" placeholder="No Rekening" required
                            value="<?php echo e($about->no_rekening); ?>">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\E-commerce\resources\views/tentang/index.blade.php ENDPATH**/ ?>