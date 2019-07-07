<?php  require_once("../ressources/config.php"); ?>
<?php  include( TEMPLATE_FRONT . DS . "header.php");?>

    <!--                   Form to insert employe                              -->
    <div class="add-emp">
        <h3>ajouter un employé</h3>
        <form action= "insert_emp.php" method ="POST">
        <input type="text" name="nom" placeholder="nom" required>
        <br>
        <br>
        <input type="text" name="prenom" placeholder="prénom" required>
        <br>
        <br>
        <input type="date" name="ddn" required>
        <br>
        <br>
        <input type="text" name="adress" placeholder="address" required>
        <br>
        <br>
        <input type="phone" name="tel" placeholder="phone" required>
        <br>
        <br>
        <input type="email" name="email" placeholder="email" required>
        <br>
        <br>
        <select name="category" id="category">
        <?php
                $sql = "SELECT * FROM category";
                $query = query($sql);
                confirm(query);
                while ($row = fetch_array($query)) {
                   echo "<option value=" . $row['cat_id'] . ">" . $row['cat'] . "</option>"; 
               }
         ?>
        </select>
        <br>
        <br>
        <input type="file" name="photo" required>
        <br>
        <br>
        <button type="submit">ajouter</button>
        </form>
    </div>
    <!--                   Form to insert category                              -->
    <div class="insert_cat">
         <form action= "insert_cat.php" method= "POST">
            <label for="category">category :</label>
            <input type="text" name="category" required>
            <button type="submit">ajouter</button>
         </form>
    </div>

    <!---------------------------------- Display employies----------------------->
    <?php
        get_employies();
    ?>
    <!---------------------------------- END Display employies----------------------->
    

    <!-----------------------------------Display categories------------------------ -->
    
    <?php  echo "<h3>------------------------------all things about category-------------------------------</h3>" ?>
    <?php
       
       get_categories();
    ?>
    <!----------------------------------- END Display categories-------------------------->

    <!----------------------------------- mailing ---------------------------------------->
    <?php  echo "<h3>------------------------------ mailing -------------------------------</h3>" ?>
     <div class="mail">
        <form action="mail.php" method="POST">
            <label for="receiver">receiver:</label>
            <select name="receiver" id="receiver">
                <?php
                $sql = "SELECT * FROM category";
                $query = query($sql);
                confirm(query);
                while ($row = fetch_array($query)) {
                   echo "<option value=" . $row['cat_id'] . ">" . $row['cat'] . "</option>"; 
               }
         ?>
            </select>
            <br>
            <br>
            <label for="subject">subject </label>
            <br>
            <br>
            <input type="text" name="subject">
            <br>
            <br>
            <textarea name="mail_text" id="" cols="30" rows="10">mail</textarea>
            <br>
            <br>
            <button type="submit">send</button>
        </form>
     </div> 
    <!----------------------------------- END mailing ---------------------------------------->
    
<?php  include( TEMPLATE_FRONT . DS . "footer.php");?>