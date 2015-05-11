<? include "includes/header.php" ?>

<main> 
  <div class="container">
    <div class="row">
      <div class="col s12">
      <h2>Campaigns</h2>
      	<div class="row">
      		<div class="col s12">
      		<h4>Active Campaigns</h4>
          	<table>
              <thead>
                <tr>
                    <th data-field="id">Campaign Name</th>
                    <th data-field="name">Description</th>
                    <th data-field="price">Particpants</th>
                </tr>
              </thead>

              <tbody class="campaign-table">
                <? foreach ($data as $campaign) { ?>

                  <tr>
                    <td><?=$campaign->name?></td>
                    <td><?=$campaign->description?></td>
                    <td>5</td>
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