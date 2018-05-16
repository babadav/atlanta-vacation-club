<?php get_header();?>
<section class="single-product-page-wrap">
    <div class="single-product-header-image" style="background-image: url(<?php the_field('header-image'); ?>)">
            
        <div class="single-product-navtabs">
                    
            <ul>
				<a href="">Property Features</a>
				<a href="">Description</a>
				<a href="">Nearby Attractions</a> 
                        
            </ul>
                
        </div>
    </div>
    <section class="single-product-left-column">
		<div class="product-title">
			<h1> <?php echo the_title(); ?> </h1>
		</div>
        <div class="single-product-image-slider">
            <div class="slider">
                <ul>
                    <img src="" alt="" style="">
                    
                </ul>
            </div>
        </div>
        <div class="property-features">
            <div class="guest-capacity single-property-feature">
				<img src=" <?php echo get_template_directory_uri(); ?>/theme/img/guest-count-symbol.png " alt="">
                <p>Guest Capacity</p>
                <p><?php the_field('guest-capacity'); ?></p>
            </div>
            <div class="square-footage single-property-feature">
				<img src=" <?php echo get_template_directory_uri(); ?>/theme/img/square-foot-symbol.png" alt="">
                <p>Square Footage</p>
                <p><?php the_field('square-footage'); ?></p>
            </div>
            <div class="per-night-price single-property-feature">
				<img src=" <?php echo get_template_directory_uri(); ?>/theme/img/per-night-symbol.png " alt="">
                <p>Per Night Price</p>
            </div>
        </div>
        <div class="product-description">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, minima voluptatibus sed, provident aut, nesciunt labore consectetur asperiores ipsum totam quis sint? Excepturi error provident, dignissimos possimus numquam ratione quod!</p>
        </div>
        <!-- <div class="residence-services-wrap">
            <ul>
                <li>Swimming Pool</li>
                <li>Television</li>
                <li>No Smoking</li>
                <li>Private Bathroom</li>
            </ul>
        </div> -->
        <div class="around-residence-wrap">
			<h1>Around the Residence</h1>
			<div class="attraction-wrap">
				<div class="attraction">
					<h2>Attraction</h2>
				</div>
				<div class="attraction">
					<h2>Attraction</h2>
				</div>
				<div class="attraction">
					<h2>Attraction</h2>
				</div>
				<div class="attraction">
					<h2>Attraction</h2>
				</div>
				<div class="attraction">
					<h2>Attraction</h2>
				</div>
				<div class="attraction">
					<h2>Attraction</h2>
				</div>
			</div>
            
        </div>
    </section>
    <section class="single-product-right-column">
        <section class="pick-date-wrap" >
            <!-- <form action="">
                <label for="check-in">Check In</label>
                <select name="check-in" id="check-in">
                	<option value="1">1</option>
                </select>
                <label for="check-out">Check Out</label>
                <select name="check-out" id="check-out">
                	<option value="1">1</option>
                </select>
                <label for="guests">Guests</label>
                <select name="guests" id="guests">
                	<option value="1">1</option>
                </select>
                
                <button class="availability-button" >Check Availability</button>
                </form> -->
            <div class="calendar-wrap">
                <div class="checkin-calendar-content">
                    <div class="calendar-header">
                        <div class="header-content">
                            <div class="prev-month">
                                <a href="">PREV</a>
                            </div>
                            <div class="active-month">
                                <h2>April 2018</h2>
                            </div>
                            <div class="next-month">
                                <a href="">NEXT</a>
                            </div>
                        </div>
                    </div>
                    <div class="week-day-wrap">
                        <div class="week-day">MO</div>
                        <div class="week-day">TU</div>
                        <div class="week-day">WE</div>
                        <div class="week-day">TH</div>
                        <div class="week-day">FR</div>
                        <div class="week-day">SA</div>
                        <div class="week-day">SU</div>
                    </div>
                    <div class="calendar-dates">
                        <div class="date date-selector">
                            <a>1</a>
                        </div>
                        <div class="date date-selector">
                            <a>2</a>
                        </div>
                        <div class="date date-selector">
                            <a>3</a>
                        </div>
                        <div class="date date-selector">
                            <a>4</a>
                        </div>
                        <div class="date date-selector">
                            <a>5</a>
                        </div>
                        <div class="date date-selector">
                            <a>6</a>
                        </div>
                        <div class="date date-selector">
                            <a>7</a>
                        </div>
                        <div class="date date-selector">
                            <a>8</a>
                        </div>
                        <div class="date date-selector">
                            <a>9</a>
                        </div>
                        <div class="date date-selector">
                            <a>10</a>
                        </div>
                        <div class="date date-selector">
                            <a>11</a>
                        </div>
                        <div class="date date-selector">
                            <a>12</a>
                        </div>
                        <div class="date date-selector">
                            <a>13</a>
                        </div>
                        <div class="date date-selector">
                            <a>14</a>
                        </div>
                        <div class="date date-selector">
                            <a>15</a>
                        </div>
                        <div class="date date-selector">
                            <a>16</a>
                        </div>
                        <div class="date date-selector">
                            <a>17</a>
                        </div>
                        <div class="date date-selector">
                            <a>18</a>
                        </div>
                        <div class="date date-selector">
                            <a>19</a>
                        </div>
                        <div class="date date-selector">
                            <a>20</a>
                        </div>
                        <div class="date date-selector">
                            <a>21</a>
                        </div>
                        <div class="date date-selector">
                            <a>22</a>
                        </div>
                        <div class="date date-selector">
                            <a>23</a>
                        </div>
                        <div class="date date-selector">
                            <a>24</a>
                        </div>
                        <div class="date date-selector">
                            <a>25</a>
                        </div>
                        <div class="date date-selector">
                            <a>26</a>
                        </div>
                        <div class="date date-selector">
                            <a>27</a>
                        </div>
                        <div class="date date-selector">
                            <a>28</a>
                        </div>
                        <div class="date date-selector">
                            <a>29</a>
                        </div>
                        <div class="date date-selector">
                            <a>30</a>
                        </div>
                        <div class="date date-selector">
                            <a>31</a>
                        </div>
                    </div>
                </div>
                <div class="checkout-calendar-content">
                    <div class="calendar-header">
                        <div class="header-content">
                            <div class="prev-month">
                                <a href="">PREV</a>
                            </div>
                            <div class="active-month">
                                <h2>April 2018</h2>
                            </div>
                            <div class="next-month">
                                <a href="">NEXT</a>
                            </div>
                        </div>
                    </div>
                    <div class="week-day-wrap">
                        <div class="week-day">MO</div>
                        <div class="week-day">TU</div>
                        <div class="week-day">WE</div>
                        <div class="week-day">TH</div>
                        <div class="week-day">FR</div>
                        <div class="week-day">SA</div>
                        <div class="week-day">SU</div>
                    </div>
                    <div class="calendar-dates">
                        <div class="date date-selector">
                            <a>1</a>
                        </div>
                        <div class="date date-selector">
                            <a>2</a>
                        </div>
                        <div class="date date-selector">
                            <a>3</a>
                        </div>
                        <div class="date date-selector">
                            <a>4</a>
                        </div>
                        <div class="date date-selector">
                            <a>5</a>
                        </div>
                        <div class="date date-selector">
                            <a>6</a>
                        </div>
                        <div class="date date-selector">
                            <a>7</a>
                        </div>
                        <div class="date date-selector">
                            <a>8</a>
                        </div>
                        <div class="date date-selector">
                            <a>9</a>
                        </div>
                        <div class="date date-selector">
                            <a>10</a>
                        </div>
                        <div class="date date-selector">
                            <a>11</a>
                        </div>
                        <div class="date date-selector">
                            <a>12</a>
                        </div>
                        <div class="date date-selector">
                            <a>13</a>
                        </div>
                        <div class="date date-selector">
                            <a>14</a>
                        </div>
                        <div class="date date-selector">
                            <a>15</a>
                        </div>
                        <div class="date date-selector">
                            <a>16</a>
                        </div>
                        <div class="date date-selector">
                            <a>17</a>
                        </div>
                        <div class="date date-selector">
                            <a>18</a>
                        </div>
                        <div class="date date-selector">
                            <a>19</a>
                        </div>
                        <div class="date date-selector">
                            <a>20</a>
                        </div>
                        <div class="date date-selector">
                            <a>21</a>
                        </div>
                        <div class="date date-selector">
                            <a>22</a>
                        </div>
                        <div class="date date-selector">
                            <a>23</a>
                        </div>
                        <div class="date date-selector">
                            <a>24</a>
                        </div>
                        <div class="date date-selector">
                            <a>25</a>
                        </div>
                        <div class="date date-selector">
                            <a>26</a>
                        </div>
                        <div class="date date-selector">
                            <a>27</a>
                        </div>
                        <div class="date date-selector">
                            <a>28</a>
                        </div>
                        <div class="date date-selector">
                            <a>29</a>
                        </div>
                        <div class="date date-selector">
                            <a>30</a>
                        </div>
                        <div class="date date-selector">
                            <a>31</a>
                        </div>
                    </div>
                </div>
                <button class="availability-button" >Check Availability</button>
            </div>
        </section>
    </section>
</section>

<?php get_footer();?>