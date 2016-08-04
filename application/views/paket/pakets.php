<?php $i=0; 
foreach($this->paket_model->get_paket()->result() as $row){?>
<div class="col-md-3 col-sm-3 col-xs-12" >
    <div class="x_panel, well" id=<?php echo "'clicklarge".$i."'"?> style=" height: 350px" >
								
		<div class="x_content">
			<img src=<?php echo "'".base_url().$row->link_gambar."'";?> style="width: 100%; height: 200px">
		</div>
        <div >
            <h3><?php echo $row->nama;?><br><small>Rp.<?php echo $row->harga;?></small></h3>
			
        </div>
                                
    </div>
</div>

<!-- Modal -->
<div id=<?php echo "'myModal".$i."'"?> class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h2 class="modal-title"><?php echo $row->nama;?></h2>
      </div>
      <div class="modal-body">
		<img src=<?php echo "'".base_url().$row->link_gambar."'";?> style="width: 100%; height: 400px">
        <div class="x_content"> 
                                     <br><h3>Pesawat</h3> 
                                     <p>Lion Air</p> 
                                     <p>Bandung - Jakarta</p><hr> 
                                     <h3>Hotel</h3> 
                                     <p>Ibis Hotel</p> <hr>
                                     <h3>Event</h3> 
                                     <p>Java Jazz</p> <hr>
                                     Rp.<?php echo $row->harga;?>
                                     <div style="text-align: center; width: 100%;"> 
 										<button class="buttonPrevious btn btn-add">Pesan</button> 
                                     </div> 
                                 </div> 

      </div>
      <div class="modal-footer">
        <!--<button type="button" class="btn btn-default" data-dismiss="modal">Pesan</button>-->
      </div>
    </div>

  </div>
</div>
<?php $i++;};?>
<div><h3><center>
<?php echo $this->pagination->create_links();?></center></h3>
</div>

<script >// Get the modal
var modal = document.getElementsByClassName('modal');
var trigger = document.getElementsByClassName('well');
for (i = 0, len = trigger.length; i < len; i++){
trigger[i].onclick = function(){
	var i=$(this).attr('id');
	i=i.substr(-1,1);
    $("#myModal"+i).modal()
    
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}}
//------------------------------------------
</script>
