   <!-- slider-start -->
    <div class="slider-container">
        <div class="slider">
            <!-- Slider Image -->
            
            <div id="mainslider" class="nivoSlider slider-image">
                <?php foreach ($Slider as $row) {
                echo "<img src='".base_url('img/slider/'.$row->SliderIMG.'')."' alt='main slider' title='#slider".$row->SliderID."' />";
            }; ?>
            </div>
            <!-- Slider Caption 1 -->
            <?php foreach ($Slider as $row) {
               echo "<div id='slider".$row->SliderID."' class='nivo-html-caption slider-caption-1'>
                <div class='slider-progress'></div>
                <div class='slide1-text slide-1 hidden-xs'>
                    <div class='middle-text'>
                        <div class='cap-dec animated slideInDown'>
                            <h3>".$row->SliderText."</h3>
                        </div>
                        <div class='cap-shop animated slideInDown'>
                            <a href='".base_url('home/shop_grid')."'>shop now</a>
                        </div>
                    </div>
                </div>
            </div>";
            } ?>
            
            <!-- Slider Caption 2 -->
            <!--<div id="slider2" class="nivo-html-caption slider-caption-2">
                <div class="slider-progress"></div>
                <div class="slide1-text slide-2 hidden-xs">
                    <div class="middle-text">
                        <div class="cap-dec animated slideInDown">
                            <h3>collection</h3>
                        </div>
                        <div class="cap-title animated slideInDown">
                            <h2>2017 new design</h2>
                        </div>
                        <div class="cap-dec-2 animated slideInDown">
                            <h3>t-shirts</h3>
                        </div>
                        <div class="cap-shop animated slideInDown">
                            <a href="#">shop now</a>
                        </div>
                    </div>
                </div>
            </div>-->
        </div>
    </div>
    <!-- slider-end -->