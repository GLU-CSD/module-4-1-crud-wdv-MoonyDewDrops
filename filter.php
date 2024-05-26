<!--Thing that links the javascript to this document-->
<script defer src="assets/js/slider.js"></script>

<?php
include_once 'connection.php';
?>

<!--the thing that filters everything-->
<div class="Filter">

  <div id="itemsFound">
    <p>Total items found: <?= count($products); ?></p> <!--Here put variable of the amount of items, do later when u got javascript but for now a placeholder-->
  </div>

  <div id="sortBy">
    <P>Sort by:</P>

    <!--the selector for how you want to view products-->
    <form>
      <select style="text-align: center;">

        <option value="1">Newest</option>
        <option value="2">Oldest</option>
        <option value="3">Price: Low-High</option>
        <option value="4">Price: High-Low</option>
        <option value="5">Duration: Short-Long</option>
        <option value="6">Duration: Long-Short</option>

      </select>
    </form>
  </div>
  <!--checkbox for what game you wanna display w the products-->
  <div id="gameFilter">
    <p>Type:</p>
    <input type="checkbox" id="Undertale" name="Undertale" value="type1" style="cursor: pointer;">
    <label for="Undertale"> Undertale Remix</label>
    <br>
    <input type="checkbox" id="AU" name="AU" value="type2" style="cursor: pointer;">
    <label for="Undertale"> Undertale Au Remix</label>
    <br>
    <input type="checkbox" id="Deltarune" name="Deltarune" value="type3" style="cursor: pointer;">
    <label for="Deltarune"> Deltarune Remix</label>
    <br>
    <input type="checkbox" id="Original" name="Original" value="type4" style="cursor: pointer;">
    <label for="Original"> Original</label>

  </div>
  <!--slider for price-->
  <div id="price">
    <p>Price</p>

    <div class="slidecContainer">
      <input type="range" min="1" max="30" value="30" class="slider" id="myRange">
      <p>€0 - €<span id="prijs"></span></p>

    </div>
  </div>

  <!--What you click when you actually want to filter the items-->
  <div id="submitFilter">
    <button type="submit">Filter?</button>
  </div>

</div>