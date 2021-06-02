<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col" class="col-2"></th>
            <th scope="col" class="col-2"></th>
            <th scope="col" class="col-8"></th>
        </tr>
    </thead>
    <tbody>
    <!-- Dans une premier temps faites une boucle pour afficher "en dur" plusieurs messages (plusieurs fois le même) -->
    <?php
        if (isset($messages)){
            foreach($messages as $row){ ?>
            <tr class="table-light">
                <td class="col-2"><?= $row['date'] ?></td>
                <td class="col-2"><?=$row['pseudo'] ?></td>
                <td class="col-8"><?= $row['content']?></td>
            </tr>               
    <?php
         }}
    ?>
    </tbody>
</table>