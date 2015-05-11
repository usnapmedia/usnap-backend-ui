<? include "includes/header.php" ?>

<main> 
<div class="container">
    <div class="row">
      <div class="col s12">
        <h2>Add New Campaign</h2>
        <div class="row">
          <div class="col s12">
            <p>Campaign Templates</p>
            <a class="waves-effect waves-light btn" id="template-best-picture">Best Picture</a>
            <a class="waves-effect waves-light btn disabled" id="template-most-likes">Most Facebook Likes</a>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col s12">
            <div class="row">
              <form class="col s12">
                <div class="row">
                  <div class="input-field col s6">
                    <input  id="campaign_name" type="text" class="validate">
                    <label for="campaign_name">Campaign Name</label>
                  </div>
                  <div class="input-field col s6">
                    <input id="campaign_description" type="text" class="validate">
                    <label for="campaign_description">Description</label>
                  </div>
                </div>

                <div class="row">
                  <div class="input-field col s12">
                    <input  id="campaign_banner_img" type="text" class="validate">
                    <label for="campaign_banner_img">Banner URL</label>
                  </div>
                </div>

                 <div class="row">
                  <div class="input-field col s6">
                     <input id="campaign_start" type="date" class="datepicker">
                    <label for="campaign_start">Start</label>
                  </div>
                  <div class="input-field col s6">
                    <input id="campaign_end" type="date" class="datepicker">
                    
                    <label for="campaign_end">End</label>
                  </div>
                </div>

                <div class="row">
                  <div class="input-field col s12">
                    <textarea id="campaign_prize" class="materialize-textarea" length="120"></textarea>
                    <label for="campaign_prize">Prize</label>
                  </div>
                </div>

                <div class="row">
                  <div class="input-field col s12">
                    <textarea id="campaign_rules" class="materialize-textarea" length="120"></textarea>
                    <label for="campaign_rules">Rules</label>
                  </div>
                </div>

                <div class="row">
                <button class="btn waves-effect waves-light" id="sendCampaign" type="submit" name="action">Submit
                  <i class="mdi-content-send right"></i>
                </button>
                </div>


                
              </form>
            </div>
      		</div>
        </div>
      </div>
    </div>
  </div>
</main>


<? include "includes/footer.php" ?>