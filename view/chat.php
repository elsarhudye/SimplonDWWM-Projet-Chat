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
            foreach($messages as $message){ ?>
            <tr class="table-light">
                <td class="col-2"><?= $message['date'] ?></td>
                <td class="col-2"><?= $message['pseudo'] ?></td>
                <td class="col-8"><?=nl2br($message['content'])?></td>
            </tr>               
    <?php
         }}
    ?>
    </tbody>
</table>