<?php
    require('inc/essentials.php');
    adminLogin();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Panel - Settings</title>
    <?php require('inc/links.php'); ?>
  </head>
  <body class="bg-light">
      
    <?php require('inc/header.php'); ?>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-10 ms-auto p-4 overflow-hidden">
          <h3 class="mb-4">SETTINGS</h3>

          <!-- General Settings Section -->

          <div class="card border-0 shadow-sm mb-4">
            <div class="card-body">
              <div class="d-flex align-items-center justify-contents-between mb-3">
                <h5 class="card-title m-0">General Settings</h5>

              <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#general-s">
              <i class="bi bi-pencil-square"></i> Edit
              </button>
              </div>
              <h6 class="card-subtitle mb-1 fw-bold">Britannia Hotel</h6>
              <p class="card-text" id="site_title"></p>
              <h6 class="card-subtitle mb-1 fw-bold">About Us</h6>
              <p class="card-text" id="site_about"></p>
            </div>
          </div>

          <!-- General Settings Modal -->

          <div class="modal fade" id="general-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog">
            <form>
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">General Settings</h5>
              </div>
              <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">site_title</label>
                        <input type="text" name="site_title" id="site_title_inp" class="form-control shadow-none" />
                    </div>
                    <div class="mb-3">
                      <label class="form-label">site_about</label>
                      <textarea
                      name="site_about"
                      id="site_about_inp"
                      class="form-control shadow-none"
                      rows="6"
                    ></textarea>
                </div>
              </div>
              
              <div class="modal-footer">
                <button type="button" onclick="site_title.value = general_data.site_title, site_about.value = general_data.site_about" class="btn text-secondary shadow-none" data-bs-dismiss="modal">Cancel</button>
                <button type="button" onclick="upd_general(site_title.value,site_about.value)" class="btn custom-bg text-white shadow-none">Submit</button>
              </div>
            </div>
            </form>
            
          </div>
        </div>

        <!-- Shutdown Section -->

        <div class="card border-0 shadow-sm">
            <div class="card-body">
              <div class="d-flex align-items-center justify-contents-between mb-3">
                <h5 class="card-title m-0">Shutdown Website</h5>
                <div class="form-check form-switch">
                  <form>
                    <input onchange="upd_shutdown(this.value)" class="form-check-input" type="checkbox" id="shutdown-toggle">
                  </form>
                </div>
              </div>
              <p class="card-text">
                No customers will be allowed to book hotel room when shutodown mode is turned on.
              </p>
            </div>
          </div>

          <!-- Contact Details Section -->
          <div class="card border-0 shadow-sm mb-4">
            <div class="card-body">
              <div class="d-flex align-items-center justify-contents-between mb-3">
                <h5 class="card-title m-0">Contacts Settings</h5>

              <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#contacts-s">
              <i class="bi bi-pencil-square"></i> Edit
              </button>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <div class="mb-4">
                    <h6 class="card-subtitle mb-1 fw-bold">Address</h6>
                    <p class="card-text" id="address"></p>
                  </div>
                  <div class="mb-4">
                    <h6 class="card-subtitle mb-1 fw-bold">Google Map</h6>
                    <p class="card-text" id="gmap"></p>
                  </div>
                  <div class="mb-4">
                    <h6 class="card-subtitle mb-1 fw-bold">Phone No.</h6>
                    <p class="card-text">
                      <span id="pn1"></span>
                    </p>
                    <p class="card-text">
                      <span id="pn2"></span>
                    </p>
                  </div>
                  <div class="mb-4">
                    <h6 class="card-subtitle mb-1 fw-bold">Email</h6>
                    <p class="card-text" id="email"></p>
                  </div>
                </div>
                <div class="col-lg-6">
                <div class="mb-4">
                    <h6 class="card-subtitle mb-1 fw-bold">Social Links</h6>
                    <p class="card-text">
                      <span id="fb"></span>
                    </p>
                    <p class="card-text">
                      <span id="insta"></span>
                    </p>
                  </div>
                </div>
                <div class="mb-4">
                    <h6 class="card-subtitle mb-1 fw-bold">iFrame</h6>
                    <iFrame id="iframe" class="border p-2 w-100" loading="lazy">
                      
                  </iFrame>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Contacts Details Modal -->

          <div class="modal fade" id="contacts-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog">
            <form id="contacts_s_form">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Contacts Settings</h5>
              </div>
              <div class="modal-body">
                <div class="container-fluid p-0">
                  <div class="row">
                    <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Address</label>
                        <input type="text" name="address" id="address_inp" class="form-control shadow-none" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Google Map Link</label>
                        <input type="text" name="gmap" id="gmap_inp" class="form-control shadow-none" required/>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Phone Numbers</label>
                        <div class="input-group mb-3">
                          <span class="input-group-text">@</span>
                          <input type="text" name="pn1" id="pn1_inp" class="form-control shadow-none" required>
                        </div>
                        <div class="input-group mb-3">
                          <span class="input-group-text">@</span>
                          <input type="text" name="pn2" id="pn2_inp" class="form-control shadow-none" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" id="email_inp" class="form-control shadow-none" required/>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">iFrame Src</label>
                        <input type="email" name="iframe" id="iframe_inp" class="form-control shadow-none" required/>
                    </div>
                    </div>
                    <div class="col-md-6">
                      <div class="mb-3">
                          <label class="form-label">Social Links</label>
                          <div class="input-group mb-3">
                            <span class="input-group-text">@</span>
                            <input type="text" name="fb" id="fb_inp" class="form-control shadow-none" required>
                          </div>
                          <div class="input-group mb-3">
                            <span class="input-group-text">@</span>
                            <input type="text" name="insta" id="insta_inp" class="form-control shadow-none" required>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>                  
              </div>
              
              <div class="modal-footer">
                <button type="button" onclick="contacts_inp(contacts_data)" class="btn text-secondary shadow-none" data-bs-dismiss="modal">Cancel</button>
                <button type="button" onclick="upd_general(site_title.value,site_about.value)" class="btn custom-bg text-white shadow-none">Submit</button>
              </div>
            </div>
            </form>
            
          </div>
        </div>
        
        </div>
      </div>
    </div>
    <?php require('inc/scripts.php'); ?>
    <script>
      let general_data, contacts_data;

      let general_s_form = document.getElementById('general_s_form');
      let site_title_inp = document.getElementById('site_title_inp');
      let site_about_inp = document.getElementById('site_about_inp');

      let contacts_s_form = document.getElementById('contacts_s_form');


      function get_general()
      {
        let site_title = document.getElementById('site_title');
        let site_about = document.getElementById('site_about');

        let site_title_inp = document.getElementById('site_title_inp');
        let site_about_inp = document.getElementById('site_about_inp');

        let shutdown_toggle = document.getElementById('shutdown-toggle');

        let xhr = new XMLHttpRequest();
        xhr.open("POST", "ajax/settings_crud.php", true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        
        xhr.onload = function(){
          general_data = JSON.parse(this.responseText);

          site_title.innerText = general_data.site_title;
          site_about.innerText = general_data.site_about;

          site_title_inp.value = general_data.site_title;
          site_about_inp.value = general_data.site_about;
          
          if(general_data.shutdown == 0){
            shutdown.toggle.checked = false;
            shutdown_toggle.value = 1;
          }
        }
        xhr.send('get_general');
      }

      function upd_general(site_title_val, site_about_val)
      {
        let xhr = new XMLHttpRequest();
        xhr.open("POST", "ajax/settings_crud.php", true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        
        xhr.onload = function(){
          var myModal = document.getElementById('general-s')
          var modal = bootstrap.Modal.getInstance(myModal) // Returns a Bootstrap modal instance
          modal.hide();
          
          if(this.responseText == 1)
          {
            alert('success','changes saved!');
            get_general();
          }

          else
          {
            alert('error','No changes made'); 
          }
        }
        xhr.send('site_title='+site_title_val+'&site_about='+site_about_val+'&upd_general');
      }

      function get_contacts()
      {
        
        let contacts_p_id = ['address', 'gmap', 'pn1', 'pn2', 'email', 'fb', 'insta'];
        let iframe = document.getElementById('iframe');
        

        let xhr = new XMLHttpRequest();
        xhr.open("POST", "ajax/settings_crud.php", true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        
        xhr.onload = function(){
          contacts_data = JSON.parse(this.responseText);
          contacts_data = Object.values(contacts_data);

        for( let i=0; i<contacts_p_id.length; ++i){
          document.getElementById(contacts_p_id[i].innerText = contacts_data[i+1]);
        }
          iframe.src = contacts_data[8];
          contacts_inp(contacts_data);
        }
        xhr.send('get_contacts');
      }
      
      function contacts_inp(data)
      {
        let contacts_inp_id = ['address_inp', 'gmap_inp', 'pn1_inp', 'pn2_inp', 'email_inp', 'fb_inp', 'insta_inp', 'iframe_inp'];

        for( let i=0;i<contacts_inp_id.length;++i){
          document.getElementById(contacts_inp_id[i]).value = data[i+1];
        }
      }

      contacts_s_form.addEventListener('submit', function(e){
        e.preventDefault();
        upd_contacts();
      })

      function upd_contacts()
      {
        let index = ['address', 'gmap', 'pn1', 'pn2', 'email', 'fb', 'insta', 'iframe'];
        let contacts_inp_id = ['address_inp', 'gmap_inp', 'pn1_inp', 'pn2_inp', 'email_inp', 'fb_inp', 'insta_inp', 'iframe_inp'];

        let data_str="";

        for(let i=0; i< index.length;++i){
          data_str += index[i] + "=" + document.getElementById(contacts_inp_id[i]).value + '&';
        }
        data_str += "upd_contacts";

        let xhr = new XMLHttpRequest();
        xhr.open("POST", "ajax/settings_crud.php", true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        xhr.onload = function(){
          var myModal = document.getElementById('contacts-s')
          var modal = bootstrap.Modal.getInstance(myModal) // Returns a Bootstrap modal instance
          modal.hide();
          if(this.responseText == 1)
          {
            alert('success','changes saved!');
            get_contacts();
          }

          else
          {
            alert('error','No changes made'); 
          }
        } 

        xhr.send(data_str);
      }

      window.onload = function(){
        get_general();
        get_contacts();
      }
    </script>
  </body>
</html>
