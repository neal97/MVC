<h1>Page Livre 📚</h1>




<table>
<thead>
    <th>id livre</th>
    <th>Auteur</th>
    <th>Titre</th>
   
</thead>

   <tbody>

   <?php foreach($livres as $values): ?>  
<tr>

<td><?=$values['id_livre'] ?></td>
<td><?=$values['auteur'] ?></td>
<td><?=$values['titre'] ?></td>


                       

<?php endforeach ?>


   </tbody>         


</table>




