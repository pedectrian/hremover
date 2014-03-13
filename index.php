<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

    <div class="how-to-use">
        <div class="one-quater">
            <div class="circle-marker">1</div>
            Сделайте депиляцию привычным для Вас способом на выбранном участке кожи (механический депилятор, восковые полоски,
            шугаринг и пр.)
        </div>
        <div class="one-quater">
            <div class="circle-marker">2</div>
            В течении 3-х дней после эпиляции, 1 раз tв день наносите на выбранный участок кожи небольшое количество Hair Remover
            на 3—8 минут
        </div>
        <div class="one-quater">
            <div class="circle-marker">3</div>
            При повторном появлении волос, проведите процедуру депиляции и нанесения Hair Remover еще раз до полного прекращения их роста
        </div>
        <div class="one-quater">
            <div class="circle-marker">4</div>
            Начинайте наслаждаться своей гладкой и красивой кожей!
        </div>
    </div>
    <div class="order-form">
        <div class="profits">
            <div class="price">
                <span>Цена:</span><span class="old-price"> 3 200 руб</span><br />
                <span class="new-price">1 990 руб</span>
            </div>
            <div class="green-title">
                Уникальность Hair Remover
            </div>
            <ul class="profit-list">
                <li>Избавление от нежелательных волос НАВСЕГДА</li>
                <li>Средство безболезненно в применении</li>
                <li>Легко использовать в домашних условиях</li>
                <li>Экономия Вашего семейного бюджета<br/> по сравнению с другими способами</li>
                <li>Возможность применения на любых<br/>  проблемных зонах</li>
            </ul>
            <div class="know-more"><a class="btn" href="http://xn----7sblrbeqckhijq0a6f1dsb.xn--p1ai/">Узнать больше</a></div>
        </div>
        <div class="submit-order">
            <div class="green-title">
                Заказать доставку
            </div>
            <div>
                <label class="f-label">ФИО</label>
                <input class="f-text" type="text" name="name" placeholder="Иванова Мария Сергеевна"/>
                <label class="f-label">Полный адрес (с индексом)</label>
                <input class="f-text" type="text" name="fulladdress" placeholder="142456, Москва, ул. Мира, д. 3, кв. 11"/>
                <label class="f-label">Телефон</label>
                <input class="f-text" type="text" name="phone" placeholder="89123456789"/>
            </div>

            <div class="align-center"><a class="btn" href="http://xn----7sblrbeqckhijq0a6f1dsb.xn--p1ai/">Заказать</a></div>
        </div>
    </div>

<?php
get_footer();
