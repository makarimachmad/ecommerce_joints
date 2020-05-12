<template>
  <div>
    <navcomponent v-if="!mobileView"></navcomponent>
    <navcomponent2 v-if="mobileView"></navcomponent2>
    
    <div class="container">
        <br><br><br>
        <div>
          <b-img src="https://static-id.zacdn.com/cms/brandbanner/996x250_M_SUBCAT_BAJUKOKO_20180710.jpg" fluid-grow alt="Fluid-grow image"></b-img>
        </div>
        <br><br><br>
        <div class="row">
            
            <div class="col-md-4" v-for="data in users" :key="data.id">
                <div class="card mb-4">
                    <img :src="data.gambar" class="card-img-top">
                    <div class="card-body">
                    <h5 class="card-title">{{data.nama}}</h5>
                    <h5 class="card-title">Rp {{data.harga}}</h5>
                    <p class="card-text">{{data.deskripsi}}</p>
                        <!-- <router-link :to="'/selengkapnya/'+data.id">selengkapnya</router-link> -->
                        <b-button v-b-toggle.sidebar-backdrop v-on:click="getSelengkapnya(data.id)">Selengkapnya</b-button>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <b-sidebar 
      id="sidebar-backdrop"
      title="Sidebar"
      backdrop
      shadow>
      <div class="px-3 py-2">
        <p>
          Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis
          in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
        </p>
        <b-img src="https://picsum.photos/500/500/?image=54" fluid thumbnail></b-img>
      </div>
      <!-- <div class="px-3 py-2">
        <b-img :src="data.gambar" fluid thumbnail></b-img>
        <h5 class="card-title">{{data.nama}}</h5>
        <h5 class="card-title">Rp {{data.harga}}</h5>
        <p>XXL | XL | L | M | S</p>
        <p>
          {{data.deskripsi}}
        </p>
      </div> -->
    </b-sidebar>
  </div>
</template>

<script>
import NavComponent from "./Nav.vue"
import NavComponent2 from "./Nav2.vue"
export default {
  components: {
    navcomponent : NavComponent,
    navcomponent2 : NavComponent2
  },
  data() {
    return {
      users: [],
	  gambarbantu: [],
	  mobileView: true,
    };
  },
  created(){
	this.handleView()
    window.addEventListener('resize', this.handleView)
    this.getSemuaData()
  },
  methods: {
    handleView() {
      this.mobileView = window.innerWidth <= 990;
    },
    getSemuaData() {
      axios
        .get("/api/bmuslim")
        .then(response => {
          // handle success
          //console.log(response);
          this.users = response.data.data
          //this.users = response.data.data.gambar
          //this.gambarbantu = ("img/"+response.data.gambar)
          //console.log(response.data.data.data[gambar]);
        })
        .catch(error => {
          // handle error
          console.log(error)
        });
    },
    getSelengkapnya:function(bantu){
      console.log(bantu)
      axios
        .get("/api/selengkapnya/"+bantu)
        then(response => {
          console.log(response)
        })
        .catch(error => {
          // handle error
          console.log(error)
        });
    }
  }
};
</script>

<style>
#app {
  font-family: "Avenir", Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}

.btn-example {
  font-size: 36px;
  padding: 20px;
}

</style>