<? include "includes/header.php" ?>

<main> 
<div class="container">
    <div class="row">
    <div class="col s12">
    	<h2>Users</h2>
    	 <div class="row">
       <div class="col s12">
<table>
        <thead>
          <tr>
              <th data-field="image">Profile Picture</th>
              <th data-field="id">Name</th>
              <th data-field="name">Email</th>
              <th data-field="price">Birthday</th>
              <th data-field="price">Klout Score</th>
              <th data-field="price">Contriubtion</th>
          </tr>
        </thead>

        <tbody>
        <? foreach ($data as $user) { ?>

          <tr>
            <td><img src="http://fakeimg.pl/100x100/00CED1/FFF/?text="></td>
            <td><?=$user->name?></td>
            <td><?=$user->email?></td>
            <td><? $meta = json_decode($user->meta,true); echo $meta['birthday']?></td>
            <td>46</td>
            <td><?=$user->contribution?></td>
          </tr>
       <? } ?>
          
         
        </tbody>
      </table>    
      </div>

        </div>



    </div>
      
      </div>
    </div>
</main>


<? include "includes/footer.php" ?>