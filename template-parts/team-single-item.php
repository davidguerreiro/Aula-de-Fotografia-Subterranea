<?php
/**
 * Team single item
 * 
 * This is the single team template.
 * 
 * @package aula/template-parts
 */

 $url = "http://localhost:8888/aula/wp-content/uploads/2018/01/1441176_10205546789420917_5821676126545783801_n.jpg";

 ?>

 <article class="team-item">
    <h3 class="team-item__title">David Guerreiro</h3>
    <div class="team-item__wrapper">
        <div class="team-item__section">
            <img src="<?php echo $url; ?>" alt="" class="team-item__image">
        </div>
        <div class="team-item__section team-item__section--data">
            <ul class="team-item__data">
                <li>
                    <i class="fa fa-id-badge" aria-hidden="true"></i>
                    Desarrollador Web
                </li>
                <li>
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    London, UK
                </li>
            </ul>
            <p class="team-item__description">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce egestas posuere fringilla. Curabitur at ullamcorper metus. Quisque eleifend purus eu justo egestas, at feugiat velit fermentum. Etiam eget consectetur purus. Curabitur id ante porttitor, scelerisque nisi nec, bibendum nulla. Praesent faucibus nisl vel orci ultrices vestibulum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam elementum aliquet tincidunt. Integer ultrices posuere ipsum eu congue. Mauris vestibulum suscipit orci sit amet suscipit. Cras eu urna iaculis, pellentesque sapien vitae, mollis mi. Duis vel felis at turpis mattis posuere eu id velit. Nunc vitae pulvinar tellus.
            </p>
        </div>
    </div>
 </article>