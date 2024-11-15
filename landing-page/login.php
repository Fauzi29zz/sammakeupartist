<!-- BEGIN DETAIL MAIN BLOCK -->
<div class="detail-block detail-block_margin" style="background-image: url(<?= base_url() . 'assets/assets-landing/image/banner/login.png'  ?>); margin-top:20px">
    <div class="wrapper">
        <div class="detail-block__content">
            <h1 style="color: white;">Log in</h1>
            <ul class="bread-crumbs">
                <li class="bread-crumbs__item">
                    <a href="<?= base_url(''); ?>" class="bread-crumbs__link" style="color: #ff69b4;">Home</a>
                </li>
                <li class="bread-crumbs__item" style="color: white;">Log in</li>
            </ul>
        </div>
    </div>
</div>
<!-- DETAIL MAIN BLOCK EOF   -->
<!-- BEGIN LOGIN -->
<div class="login">
    <div class="wrapper">
        <div class="login-form js-img" data-src="img/login-form__bg.png">
               <form action="<?= base_url('login/proses'); ?>" method="POST">
                   <h3 class="login-title">LOGIN</h3>
                   <p class="login-description" style="text-align: center; font-size: 16px; margin-bottom: 40px;">Masukkan Email dan Password untuk masuk ke akun Anda yang terdaftar.</p>
                   <div class="box-field">
                       <input type="text" class="form-control" name="email" id="email" placeholder="Enter your email">
                   </div>
                   <div class="box-field password-field">
                       <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password">
                       <span class="toggle-password" onclick="togglePasswordVisibility('password', this)">👁️‍🗨️</span>
                   </div>
                   <button class="btn" type="submit" style="border-radius: 10px;">Log in</button>
                   <div class="login-form__bottom">
                       <span>Tidak punya akun? <a href="<?= base_url('register') ?>">Daftar Sekarang</a></span>
                   </div>
               </form>
               <br><center><p>Created by <a href='#' title='SAMmakeUP' target='_blank'>SAMmakeUP</a></p></center>
           </div>
       </div>
       <img class="promo-video__decor js-img" data-src="<?= base_url() . 'assets/assets-landing/image/side/shop-decor-side-r.jpg' ?>" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" alt="">
       <img class="shop-decor js-img" data-src="<?= base_url() . 'assets/assets-landing/image/side/shop-decor-side.jpg' ?>" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" alt="">
   </div>>

   <style>
   .password-field {
       position: relative;
   }

   .toggle-password {
       position: absolute;
       right: 10px;
       top: 50%;
       transform: translateY(-50%);
       cursor: pointer;
       user-select: none;
   }
   </style>

