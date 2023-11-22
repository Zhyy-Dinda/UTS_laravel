<nav class="pc-sidebar">
    <div class="navbar-wrapper">
      <div class="m-header">
        <a href="#" class="b-brand text-primary">
          <!-- ========   Change your logo from here   ============ -->
          <img src="../assets/images/logo-dark.svg" />
          <span class="badge bg-light-success rounded-pill ms-2 theme-version">v9.0</span>
        </a>
      </div>
      <div class="navbar-content">
        <div class="card pc-user-card">
          <div class="card-body">
            <div class="d-flex align-items-center">
              <div class="flex-shrink-0">
                <img src="../assets/images/user/avatar-1.jpg" alt="user-image" class="user-avtar wid-45 rounded-circle" />
              </div>
              <div class="flex-grow-1 ms-3 me-2">
                <h6 class="mb-0">Zaini</h6>
                <small>Administrator</small>
              </div>
              <a class="btn btn-icon btn-link-secondary avtar" data-bs-toggle="collapse" href="#pc_sidebar_userlink">
                <svg class="pc-icon">
                  <use xlink:href="#custom-sort-outline"></use>
                </svg>
              </a>
            </div>
            <div class="collapse pc-user-links" id="pc_sidebar_userlink">
              <div class="pt-3">
                <a href="#!">
                  <i class="ti ti-user"></i>
                  <span>My Account</span>
                </a>
                <a href="#!">
                  <i class="ti ti-settings"></i>
                  <span>Settings</span>
                </a>
                <a href="#!">
                  <i class="ti ti-lock"></i>
                  <span>Lock Screen</span>
                </a>
                <a href="#!">
                  <i class="ti ti-power"></i>
                  <span>Logout</span>
                </a>
              </div>
            </div>
          </div>
        </div>
        <ul class="pc-navbar">
            <li class="pc-item pc-caption">
                <div class="col-md-7 col-sm-2 pc-navbar">
                    <ul class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                      <li><a class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</a></li>
                      <li><a class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</a></li>
                      <li><a class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</a></li>
                      <li><a class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a></li>
                    </ul>
                </div>
            <label>Navigation</label>
          </li>
          <li class="pc-item pc-hasmenu">
            <a href="#!" class="pc-link">
              <span class="pc-micon">
                <svg class="pc-icon">
                  <use xlink:href="#custom-status-up"></use>
                </svg>
              </span>
              <span class="pc-mtext">Dashboard</span>
              <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
              <span class="pc-badge">7</span>
            </a>
            <ul class="pc-submenu">
              <li class="pc-item"><a class="pc-link" href="{{'bagian'}}">Bagian</a></li>
              <li class="pc-item"><a class="pc-link" href="{{'kategori'}}">Kategori</a></li>
              <li class="pc-item"><a class="pc-link" href="{{'pegawai'}}">Pegawai</a></li>
              <li class="pc-item"><a class="pc-link" href="{{'kebutuhan'}}">Kebutuhan</a></li>
              <li class="pc-item"><a class="pc-link" href="{{'progres'}}">Progres</a></li>
              <li class="pc-item"><a class="pc-link" href="{{'pengajuan'}}">Pengajuan Kebutuhan</a></li>
            </ul>

          </li>

          <li class="pc-item">
            <a href="{{'/bagian'}}" class="pc-link">
              <span class="pc-micon">
                <svg class="pc-icon">
                  <use xlink:href="#custom-story"></use>
                </svg>
              </span>
              <span class="pc-mtext">Bagian</span>
            </a>
          </li>

          <li class="pc-item">
            <a href="{{'/kategori'}}" class="pc-link">
              <span class="pc-micon">
                <svg class="pc-icon">
                  <use xlink:href="#custom-fatrows"></use>
                </svg>
              </span>
              <span class="pc-mtext">Kategori</span>
            </a>
          </li>
          <li class="pc-item">
            <a href="{{'/pegawai'}}" class="pc-link">
              <span class="pc-micon">
                <svg class="pc-icon">
                  <use xlink:href="#custom-presentation-chart"></use>
                </svg>
              </span>
              <span class="pc-mtext">Pegawai</span></a>
          </li>
          <li class="pc-item">
            <a href="{{'/pic'}}" class="pc-link">
                <span class="pc-micon">
                <svg class="pc-icon">
                  <use xlink:href="#custom-box-1"></use>
                </svg>
             </span>
            <span class="pc-mtext">PIK</span></a>
          </li>

          <li class="pc-item">
            <a href="{{'/progres'}}" class="pc-link">
                <span class="pc-micon">
                <svg class="pc-icon">
                    <use xlink:href="#custom-direct-inbox"></use>
                </svg>
             </span>
            <span class="pc-mtext">Progres</span></a>
          </li>
          <li class="pc-item">
            <a href="{{'/kebutuhan'}}" class="pc-link">
                <span class="pc-micon">
                <svg class="pc-icon">
                  <use xlink:href="#custom-box-1"></use>
                </svg>
             </span>
            <span class="pc-mtext">kebutuhan</span></a>
          </li>
          <li class="pc-item">
            <a href="{{'/pengajuan'}}" class="pc-link">
                <span class="pc-micon">
                <svg class="pc-icon">
                  <use xlink:href="#custom-box-1"></use>
                </svg>
             </span>
            <span class="pc-mtext">Pengajuan</span></a>
          </li>

          <li class="pc-item pc-caption">
            <label>Forms</label>
            <svg class="pc-icon">
              <use xlink:href="#custom-element-plus"></use>
            </svg>
          </li>
          <li class="pc-item pc-hasmenu">
            <a href="#!" class="pc-link">
              <span class="pc-micon">
                <svg class="pc-icon">
                  <use xlink:href="#custom-element-plus"></use>
                </svg>
              </span>
              <span class="pc-mtext">Forms Elements</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span
            ></a>
            <ul class="pc-submenu">
              <li class="pc-item"><a class="pc-link" href="../forms/form_elements.html">Form Basic</a></li>
              <li class="pc-item"><a class="pc-link" href="../forms/form_floating.html">Form Floating</a></li>
              <li class="pc-item"><a class="pc-link" href="../forms/form2_basic.html">Form Options</a></li>
              <li class="pc-item"><a class="pc-link" href="../forms/form2_input_group.html">Input Groups</a></li>
              <li class="pc-item"><a class="pc-link" href="../forms/form2_checkbox.html">Checkbox</a></li>
              <li class="pc-item"><a class="pc-link" href="../forms/form2_radio.html">Radio</a></li>
              <li class="pc-item"><a class="pc-link" href="../forms/form2_switch.html">Switch</a></li>
              <li class="pc-item"><a class="pc-link" href="../forms/form2_megaoption.html">Mega option</a></li>
            </ul>
          </li>
          <li class="pc-item pc-hasmenu">
            <a href="#!" class="pc-link">
              <span class="pc-micon">
                <svg class="pc-icon">
                  <use xlink:href="#custom-cpu-charge"></use>
                </svg>
              </span>
              <span class="pc-mtext">Forms Plugins</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span
            ></a>
            <ul class="pc-submenu">
              <li class="pc-item pc-hasmenu">
                <a class="pc-link" href="#"
                  >Date<span class="pc-arrow"><i data-feather="chevron-right"></i></span
                ></a>
                <ul class="pc-submenu">
                  <li class="pc-item"><a class="pc-link" href="../forms/form2_datepicker.html">Datepicker</a></li>
                  <li class="pc-item"><a class="pc-link" href="../forms/form2_daterangepicker.html">Date Range Picker</a> </li>
                  <li class="pc-item"><a class="pc-link" href="../forms/form2_timepicker.html">Timepicker</a></li>
                </ul>
              </li>
              <li class="pc-item pc-hasmenu">
                <a class="pc-link" href="#"
                  >Select<span class="pc-arrow"><i data-feather="chevron-right"></i></span
                ></a>
                <ul class="pc-submenu">
                  <li class="pc-item"><a class="pc-link" href="../forms/form2_choices.html">Choices js</a></li>
                </ul>
              </li>
              <li class="pc-item"><a class="pc-link" href="../forms/form2_recaptcha.html">Google reCaptcha</a></li>
              <li class="pc-item"><a class="pc-link" href="../forms/form2_inputmask.html">Input Masks</a></li>
              <li class="pc-item"><a class="pc-link" href="../forms/form2_clipboard.html">Clipboard</a></li>
              <li class="pc-item"><a class="pc-link" href="../forms/form2_nouislider.html">Nouislider</a></li>
              <li class="pc-item"><a class="pc-link" href="../forms/form2_switchjs.html">Bootstrap Switch</a></li>
              <li class="pc-item"><a class="pc-link" href="../forms/form2_typeahead.html">Typeahead</a></li>
            </ul>
          </li>
          <li class="pc-item pc-hasmenu">
            <a href="#!" class="pc-link">
              <span class="pc-micon">
                <svg class="pc-icon">
                  <use xlink:href="#custom-text-block"></use>
                </svg>
              </span>
              <span class="pc-mtext">Text Editors</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span
            ></a>
            <ul class="pc-submenu">
              <li class="pc-item"><a class="pc-link" href="../forms/form2_tinymce.html">Tinymce</a></li>
              <li class="pc-item"><a class="pc-link" href="../forms/form2_quill.html">Quill</a></li>
              <li class="pc-item pc-hasmenu">
                <a class="pc-link" href="#"
                  >CK editor<span class="pc-arrow"><i data-feather="chevron-right"></i></span
                ></a>
                <ul class="pc-submenu">
                  <li class="pc-item"><a class="pc-link" href="../forms/editor-classic.html">classic</a></li>
                  <li class="pc-item"><a class="pc-link" href="../forms/editor-document.html">Document</a></li>
                  <li class="pc-item"><a class="pc-link" href="../forms/editor-inline.html">Inline</a></li>
                  <li class="pc-item"><a class="pc-link" href="../forms/editor-balloon.html">Balloon</a></li>
                </ul>
              </li>
              <li class="pc-item"><a class="pc-link" href="../forms/form2_markdown.html">Markdown</a></li>
            </ul>
          </li>
          <li class="pc-item pc-hasmenu">
            <a href="#!" class="pc-link">
              <span class="pc-micon">
                <svg class="pc-icon">
                  <use xlink:href="#custom-row-vertical"></use>
                </svg>
              </span>
              <span class="pc-mtext">Form Layouts</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span
            ></a>
            <ul class="pc-submenu">
              <li class="pc-item"><a class="pc-link" href="../forms/form2_lay-default.html">Layouts</a></li>
              <li class="pc-item"><a class="pc-link" href="../forms/form2_lay-multicolumn.html">Multicolumn</a></li>
              <li class="pc-item"><a class="pc-link" href="../forms/form2_lay-actionbars.html">Actionbars</a></li>
              <li class="pc-item"><a class="pc-link" href="../forms/form2_lay-stickyactionbars.html">Sticky Action bars</a> </li>
            </ul>
          </li>
          <li class="pc-item pc-hasmenu">
            <a href="#!" class="pc-link">
              <span class="pc-micon">
                <svg class="pc-icon">
                  <use xlink:href="#custom-document-upload"></use>
                </svg>
              </span>
              <span class="pc-mtext">File upload</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span
            ></a>
            <ul class="pc-submenu">
              <li class="pc-item"><a class="pc-link" href="../forms/file-upload.html">Dropzone</a></li>
              <li class="pc-item"><a class="pc-link" href="../forms/form2_flu-uppy.html">Uppy</a></li>
            </ul>
          </li>
          <li class="pc-item">
            <a href="../forms/form-validation.html" class="pc-link">
              <span class="pc-micon">
                <svg class="pc-icon">
                  <use xlink:href="#custom-password-check"></use>
                </svg>
              </span>
              <span class="pc-mtext">Form Validation</span></a
            >
          </li>
          <li class="pc-item"
            ><a href="../forms/image_crop.html" class="pc-link">
              <span class="pc-micon">
                <svg class="pc-icon">
                  <use xlink:href="#custom-crop"></use>
                </svg>
              </span>
              <span class="pc-mtext">Image cropper</span></a
            ></li
          >
          <li class="pc-item pc-caption">
            <label>table</label>
            <svg class="pc-icon">
              <use xlink:href="#custom-text-align-justify-center"></use>
            </svg>
          </li>
          <li class="pc-item pc-hasmenu">
            <a href="#!" class="pc-link">
              <span class="pc-micon">
                <svg class="pc-icon">
                  <use xlink:href="#custom-text-align-justify-center"></use>
                </svg>
              </span>
              <span class="pc-mtext">Bootstrap Table</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span
            ></a>
            <ul class="pc-submenu">
              <li class="pc-item"><a class="pc-link" href="../table/tbl_bootstrap.html">Basic table</a></li>
              <li class="pc-item"><a class="pc-link" href="../table/tbl_sizing.html">Sizing table</a></li>
              <li class="pc-item"><a class="pc-link" href="../table/tbl_border.html">Border table</a></li>
              <li class="pc-item"><a class="pc-link" href="../table/tbl_styling.html">Styling table</a></li>
            </ul>
          </li>
          <li class="pc-item pc-hasmenu">
            <a href="#!" class="pc-link">
              <span class="pc-micon">
                <svg class="pc-icon">
                  <use xlink:href="#custom-keyboard"></use>
                </svg>
              </span>
              <span class="pc-mtext">Vanilla Table</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span
            ></a>
            <ul class="pc-submenu">
              <li class="pc-item"><a class="pc-link" href="../table/tbl_dt-simple.html">Basic initialization</a></li>
              <li class="pc-item"><a class="pc-link" href="../table/tbl_dt-dynamic-import.html">Dynamic Import</a></li>
              <li class="pc-item"><a class="pc-link" href="../table/tbl_dt-render-column-cells.html">Render Column Cells</a></li>
              <li class="pc-item"><a class="pc-link" href="../table/tbl_dt-column-manipulation.html">Column Manipulation</a></li>
              <li class="pc-item"><a class="pc-link" href="../table/tbl_dt-datetime-sorting.html">Datetime Sorting</a></li>
              <li class="pc-item"><a class="pc-link" href="../table/tbl_dt-methods.html">Methods</a></li>
              <li class="pc-item"><a class="pc-link" href="../table/tbl_dt-add-rows.html">Add Rows</a></li>
              <li class="pc-item"><a class="pc-link" href="../table/tbl_dt-fetch-api.html">Fetch API</a></li>
              <li class="pc-item"><a class="pc-link" href="../table/tbl_dt-filters.html">Filters</a></li>
              <li class="pc-item"><a class="pc-link" href="../table/tbl_dt-export.html">Export</a></li>
            </ul>
          </li>
          <li class="pc-item pc-hasmenu">
            <a href="#!" class="pc-link">
              <span class="pc-micon">
                <svg class="pc-icon">
                  <use xlink:href="#custom-graph"></use>
                </svg>
              </span>
              <span class="pc-mtext">Data table</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span
            ></a>
            <ul class="pc-submenu">
              <li class="pc-item"><a class="pc-link" href="../table/dt_advance.html">Advance initialization</a></li>
              <li class="pc-item"><a class="pc-link" href="../table/dt_styling.html">Styling</a></li>
              <li class="pc-item"><a class="pc-link" href="../table/dt_api.html">API</a></li>
              <li class="pc-item"><a class="pc-link" href="../table/dt_plugin.html">Plug-in</a></li>
              <li class="pc-item"><a class="pc-link" href="../table/dt_sources.html">Data sources</a></li>
            </ul>
          </li>
          <li class="pc-item pc-hasmenu">
            <a href="#!" class="pc-link">
              <span class="pc-micon">
                <svg class="pc-icon">
                  <use xlink:href="#custom-add-item"></use>
                </svg>
              </span>
              <span class="pc-mtext">DT extensions</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span
            ></a>
            <ul class="pc-submenu">
              <li class="pc-item"><a class="pc-link" href="../table/dt_ext_autofill.html">Autofill</a></li>
              <li class="pc-item pc-hasmenu">
                <a href="#!" class="pc-link"
                  >Button<span class="pc-arrow"><i data-feather="chevron-right"></i></span
                ></a>
                <ul class="pc-submenu">
                  <li class="pc-item"><a class="pc-link" href="../table/dt_ext_basic_buttons.html">Basic button</a></li>
                  <li class="pc-item"><a class="pc-link" href="../table/dt_ext_export_buttons.html">Data export</a></li>
                </ul>
              </li>
              <li class="pc-item"><a class="pc-link" href="../table/dt_ext_col_reorder.html">Col reorder</a></li>
              <li class="pc-item"><a class="pc-link" href="../table/dt_ext_fixed_columns.html">Fixed columns</a></li>
              <li class="pc-item"><a class="pc-link" href="../table/dt_ext_fixed_header.html">Fixed header</a></li>
              <li class="pc-item"><a class="pc-link" href="../table/dt_ext_key_table.html">Key table</a></li>
              <li class="pc-item"><a class="pc-link" href="../table/dt_ext_responsive.html">Responsive</a></li>
              <li class="pc-item"><a class="pc-link" href="../table/dt_ext_row_reorder.html">Row reorder</a></li>
              <li class="pc-item"><a class="pc-link" href="../table/dt_ext_scroller.html">Scroller</a></li>
              <li class="pc-item"><a class="pc-link" href="../table/dt_ext_select.html">Select table</a></li>
            </ul>
          </li>
          <li class="pc-item pc-caption">
            <label>Charts</label>
            <svg class="pc-icon">
              <use xlink:href="#custom-graph"></use>
            </svg>
          </li>
          <li class="pc-item pc-hasmenu">
            <a href="#!" class="pc-link">
              <span class="pc-micon">
                <svg class="pc-icon">
                  <use xlink:href="#custom-graph"></use>
                </svg>
              </span>
              <span class="pc-mtext">Charts</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span
            ></a>
            <ul class="pc-submenu">
              <li class="pc-item"><a class="pc-link" href="../chart/chart-apex.html">Apex Chart</a></li>
            </ul>
          </li>
          <li class="pc-item pc-caption">
            <label>Application</label>
            <svg class="pc-icon">
              <use xlink:href="#custom-shopping-bag"></use>
            </svg>
          </li>
          <li class="pc-item">
            <a href="../application/calendar.html" class="pc-link">
              <span class="pc-micon">
                <svg class="pc-icon">
                  <use xlink:href="#custom-calendar-1"></use>
                </svg>
              </span>
              <span class="pc-mtext">Calendar</span></a
            >
          </li>
          <li class="pc-item">
            <a href="../application/chat.html" class="pc-link">
              <span class="pc-micon">
                <svg class="pc-icon">
                  <use xlink:href="#custom-message-2"></use>
                </svg>
              </span>
              <span class="pc-mtext">Chat</span></a
            >
          </li>
          <li class="pc-item">
            <a href="../application/cust_customer_list.html" class="pc-link">
              <span class="pc-micon">
                <svg class="pc-icon">
                  <use xlink:href="#custom-notification-status"></use>
                </svg>
              </span>
              <span class="pc-mtext">Customer</span></a
            >
          </li>
          <li class="pc-item pc-hasmenu">
            <a href="#!" class="pc-link">
              <span class="pc-micon">
                <svg class="pc-icon">
                  <use xlink:href="#custom-shopping-bag"></use>
                </svg>
              </span>
              <span class="pc-mtext">E-commerce</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span
            ></a>
            <ul class="pc-submenu">
              <li class="pc-item"><a class="pc-link" href="../application/ecom_product.html">Product</a></li>
              <li class="pc-item"><a class="pc-link" href="../application/ecom_product-details.html">Product details</a></li>
              <li class="pc-item"><a class="pc-link" href="../application/ecom_product-list.html">Product List</a></li>
              <li class="pc-item"><a class="pc-link" href="../application/ecom_product-add.html">Add New Product</a></li>
              <li class="pc-item"><a class="pc-link" href="../application/ecom_checkout.html">Checkout</a></li>
            </ul>
          </li>
          <li class="pc-item">
            <a href="../application/file-manager.html" class="pc-link">
              <span class="pc-micon">
                <svg class="pc-icon">
                  <use xlink:href="#custom-document-filter"></use>
                </svg>
              </span>
              <span class="pc-mtext">File manager</span></a
            >
          </li>
          <li class="pc-item">
            <a href="../application/mail.html" class="pc-link">
              <span class="pc-micon">
                <svg class="pc-icon">
                  <use xlink:href="#custom-direct-inbox"></use>
                </svg>
              </span>
              <span class="pc-mtext">Mail</span></a
            >
          </li>
          <li class="pc-item pc-hasmenu">
            <a href="#!" class="pc-link">
              <span class="pc-micon">
                <svg class="pc-icon">
                  <use xlink:href="#custom-user-square"></use>
                </svg>
              </span>
              <span class="pc-mtext">Users</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span
            ></a>
            <ul class="pc-submenu">
              <li class="pc-item"><a class="pc-link" href="../application/account-profile.html">Account Profile</a></li>
              <li class="pc-item"><a class="pc-link" href="../application/social-media.html">Social media</a></li>
            </ul>
          </li>

          <li class="pc-item pc-caption">
            <label>Pages</label>
            <svg class="pc-icon">
              <use xlink:href="#custom-flag"></use>
            </svg>
          </li>
          <li class="pc-item pc-hasmenu">
            <a href="#!" class="pc-link">
              <span class="pc-micon">
                <svg class="pc-icon">
                  <use xlink:href="#custom-shield"></use>
                </svg>
              </span>
              <span class="pc-mtext">Authentication</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span
            ></a>
            <ul class="pc-submenu">
              <li class="pc-item pc-hasmenu">
                <a href="#!" class="pc-link"
                  >Authentication 1<span class="pc-arrow"><i data-feather="chevron-right"></i></span
                ></a>
                <ul class="pc-submenu">
                  <li class="pc-item"><a class="pc-link" target="_blank" href="../pages/login-v1.html">Login</a></li>
                  <li class="pc-item"><a class="pc-link" target="_blank" href="../pages/register-v1.html">Register</a></li>
                  <li class="pc-item"><a class="pc-link" target="_blank" href="../pages/forgot-password-v1.html">Forgot Password</a></li>
                  <li class="pc-item"><a class="pc-link" target="_blank" href="../pages/check-mail-v1.html">check mail</a></li>
                  <li class="pc-item"><a class="pc-link" target="_blank" href="../pages/reset-password-v1.html">reset password</a> </li>
                  <li class="pc-item"><a class="pc-link" target="_blank" href="../pages/code-verification-v1.html">code verification</a></li>
                </ul>
              </li>
              <li class="pc-item pc-hasmenu">
                <a href="#!" class="pc-link"
                  >Authentication 2<span class="pc-arrow"><i data-feather="chevron-right"></i></span
                ></a>
                <ul class="pc-submenu">
                  <li class="pc-item"><a class="pc-link" target="_blank" href="../pages/login-v2.html">Login</a></li>
                  <li class="pc-item"><a class="pc-link" target="_blank" href="../pages/register-v2.html">Register</a></li>
                  <li class="pc-item"><a class="pc-link" target="_blank" href="../pages/forgot-password-v2.html">Forgot password</a> </li>
                  <li class="pc-item"><a class="pc-link" target="_blank" href="../pages/check-mail-v2.html">check mail</a></li>
                  <li class="pc-item"><a class="pc-link" target="_blank" href="../pages/reset-password-v2.html">reset password</a> </li>
                  <li class="pc-item"><a class="pc-link" target="_blank" href="../pages/code-verification-v2.html">code verification</a></li>
                </ul>
              </li>
              <li class="pc-item">
                <a href="../pages/login-v3.html" target="_blank" class="pc-link">Authentication 3</a>
              </li>
            </ul>
          </li>
          <li class="pc-item pc-hasmenu">
            <a href="#!" class="pc-link">
              <span class="pc-micon">
                <svg class="pc-icon">
                  <use xlink:href="#custom-flag"></use>
                </svg>
              </span>
              <span class="pc-mtext">Maintenance</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span
            ></a>
            <ul class="pc-submenu">
              <li class="pc-item"><a class="pc-link" target="_blank" href="../pages/error-404.html">Error 404</a></li>
              <li class="pc-item"><a class="pc-link" target="_blank" href="../pages/error-500.html">Error 500</a></li>
              <li class="pc-item pc-hasmenu">
                <a href="#!" class="pc-link"
                  >Under construction<span class="pc-arrow"><i data-feather="chevron-right"></i></span
                ></a>
                <ul class="pc-submenu">
                  <li class="pc-item"><a class="pc-link" target="_blank" href="../pages/under-construction-v1.html">Under Construction 1</a></li>
                  <li class="pc-item"><a class="pc-link" target="_blank" href="../pages/under-construction-v2.html">Under Construction 2</a></li>
                </ul>
              </li>
              <li class="pc-item pc-hasmenu">
                <a href="#!" class="pc-link"
                  >Coming soon<span class="pc-arrow"><i data-feather="chevron-right"></i></span
                ></a>
                <ul class="pc-submenu">
                  <li class="pc-item"><a class="pc-link" target="_blank" href="../pages/coming-soon-v1.html">Coming soon 1</a> </li>
                  <li class="pc-item"><a class="pc-link" target="_blank" href="../pages/coming-soon-v2.html">Coming soon 2</a> </li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="pc-item"
            ><a href="../pages/contact-us.html" class="pc-link" target="_blank">
              <span class="pc-micon">
                <svg class="pc-icon">
                  <use xlink:href="#custom-24-support"></use>
                </svg>
              </span>
              <span class="pc-mtext">Contact us</span>
            </a>
          </li>
          <li class="pc-item pc-hasmenu">
            <a href="#!" class="pc-link">
              <span class="pc-micon">
                <svg class="pc-icon">
                  <use xlink:href="#custom-dollar-square"></use>
                </svg>
              </span>
              <span class="pc-mtext">Price</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span
            ></a>
            <ul class="pc-submenu">
              <li class="pc-item"><a class="pc-link" href="../pages/price-v1.html">Price 1</a></li>
              <li class="pc-item"><a class="pc-link" href="../pages/price-v2.html">Price 2</a></li>
            </ul>
          </li>
          <li class="pc-item"
            ><a href="../pages/landing.html" class="pc-link" target="_blank"
              ><span class="pc-micon">
                <svg class="pc-icon">
                  <use xlink:href="#custom-airplane"></use>
                </svg> </span
              ><span class="pc-mtext">Landing</span></a
            >
          </li>

          <li class="pc-item pc-caption">
            <label>Other</label>
            <svg class="pc-icon">
              <use xlink:href="#custom-notification-status"></use>
            </svg>
          </li>
          <li class="pc-item pc-hasmenu">
            <a href="#!" class="pc-link"
              ><span class="pc-micon">
                <svg class="pc-icon">
                  <use xlink:href="#custom-level"></use>
                </svg> </span
              ><span class="pc-mtext">Menu levels</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span
            ></a>
            <ul class="pc-submenu">
              <li class="pc-item"><a class="pc-link" href="#!">Level 2.1</a></li>
              <li class="pc-item pc-hasmenu">
                <a href="#!" class="pc-link"
                  >Level 2.2<span class="pc-arrow"><i data-feather="chevron-right"></i></span
                ></a>
                <ul class="pc-submenu">
                  <li class="pc-item"><a class="pc-link" href="#!">Level 3.1</a></li>
                  <li class="pc-item"><a class="pc-link" href="#!">Level 3.2</a></li>
                  <li class="pc-item pc-hasmenu">
                    <a href="#!" class="pc-link"
                      >Level 3.3<span class="pc-arrow"><i data-feather="chevron-right"></i></span
                    ></a>
                    <ul class="pc-submenu">
                      <li class="pc-item"><a class="pc-link" href="#!">Level 4.1</a></li>
                      <li class="pc-item"><a class="pc-link" href="#!">Level 4.2</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="pc-item pc-hasmenu">
                <a href="#!" class="pc-link"
                  >Level 2.3<span class="pc-arrow"><i data-feather="chevron-right"></i></span
                ></a>
                <ul class="pc-submenu">
                  <li class="pc-item"><a class="pc-link" href="#!">Level 3.1</a></li>
                  <li class="pc-item"><a class="pc-link" href="#!">Level 3.2</a></li>
                  <li class="pc-item pc-hasmenu">
                    <a href="#!" class="pc-link"
                      >Level 3.3<span class="pc-arrow"><i data-feather="chevron-right"></i></span
                    ></a>
                    <ul class="pc-submenu">
                      <li class="pc-item"><a class="pc-link" href="#!">Level 4.1</a></li>
                      <li class="pc-item"><a class="pc-link" href="#!">Level 4.2</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="pc-item"
            ><a href="../other/sample-page.html" class="pc-link">
              <span class="pc-micon">
                <svg class="pc-icon">
                  <use xlink:href="#custom-notification-status"></use>
                </svg>
              </span>
              <span class="pc-mtext">Sample page</span></a
            ></li
          >

        </ul>
      </div>
    </div>
  </nav>
