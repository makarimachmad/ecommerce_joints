<template>
  <div>
    <b-navbar toggleable="lg" class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <b-navbar-brand>
          <router-link to="/admin" class="nav-link">Jcloth</router-link>
        </b-navbar-brand>

        <b-row id="bantu">
          <!-- <b-col >
            <b-navbar-nav>
              <b-nav-item class="h3 mb-2">
                <b-icon-bag></b-icon-bag>
              </b-nav-item>
            </b-navbar-nav>
          </b-col> -->
          <b-col>
            <b-navbar-nav>
              <b-nav-item class="h3 mb-2">
                <b-icon-people-circle></b-icon-people-circle>
              </b-nav-item>
            </b-navbar-nav>
          </b-col>
          <b-col> 
            <b-navbar-nav>
              <b-nav-item>
                <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>
              </b-nav-item>
            </b-navbar-nav>
          </b-col>
        </b-row>
        

        <b-collapse id="nav-collapse" is-nav>
          <b-navbar-nav>
                <input class="form-control mr-sm-6" type="text" placeholder="Search" aria-label="Search"/>
                <b-button size="sm" class="my-2 my-sm-0" type="submit">
                  <b-icon-search></b-icon-search>
                </b-button>
          </b-navbar-nav>
          <b-navbar-nav>
            <b-nav-item>
              <router-link to="/admin/proses" class="nav-link">Tambah Data</router-link>
            </b-nav-item>
            <b-nav-item>
              <router-link to="/admin/keranjang" class="nav-link">Keranjang</router-link>
            </b-nav-item>
            <b-nav-item>
              <router-link to="/admin/verifikasi" class="nav-link">Verifikasi</router-link>
            </b-nav-item>
          </b-navbar-nav>

          <!-- Right aligned nav items -->
        
          
          <!-- <b-navbar-nav class="ml-auto">
            <b-nav-item class="h3 mb-2">
              <router-link to="/bmuslim" class="nav-link">
                <b-icon-bag></b-icon-bag>
              </router-link>
            </b-nav-item>
            <b-nav-item class="h3 mb-2">
              <b-nav-item-dropdown class="h3 mb-2">
                
                <template v-slot:button-content>
                  <b-icon-people-circle></b-icon-people-circle>
                </template>
                <b-dropdown-item href="#">Profil</b-dropdown-item>
                <b-dropdown-item href="#">Keluar</b-dropdown-item>
              </b-nav-item-dropdown>
              <router-link to="/" class="nav-link">
                <b-icon-people-circle></b-icon-people-circle>
              </router-link>
            </b-nav-item>
          </b-navbar-nav> -->
        </b-collapse>
      </div>
    </b-navbar>
  </div>
</template>

<script>

  export default{
    data() {
      return {
        show: true,
        bantu: false
      }
    },
    methods: {
      toggleNavbar() {
        this.show = !this.show;
        this.$root.$emit('bv::hide::popover', 'bantu')
      }
    }
  }

  $(document).ready(function(){
    var urlParams = new URLSearchParams(window.location.search);
    $("#txSearch").val(urlParams.get('q'));
  });
</script>
<style lang="scss" scoped>
  .search {
    position: relative;
    width: 100%;
    max-width: 400px;

    input {
      border: none;
      outline: none;
      width: calc(100% - 80px);
      padding: 15px 60px 15px 20px;
      margin: 0;
      border-radius: 20px;
      background-color: #fff;
      font-family: "Segoe UI", Tahoma;
      font-size: 1rem;
    }

    i {
      position: absolute;
      right: 20px;
      top: 15px;
      font-size: 1.6rem;
      color: #aaa;
      cursor: pointer;
    }
  }
</style>