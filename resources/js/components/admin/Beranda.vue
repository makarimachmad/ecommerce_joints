<template>
  <div>
    <navcomponent v-if="!mobileView"></navcomponent>
    <navcomponent2 v-if="mobileView"></navcomponent2>
    <br>
    <div class="container">
      <div
        class="modal fade"
        id="modalDelete"
        tabindex="-1"
        role="dialog"
        aria-hidden="true"
      >
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Konfirmasi</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">Hapus Data ?</div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
              <button type="submit" class="btn btn-danger" data-dismiss="modal" v-on:click="deletePerson()" id="btnDelete">Delete</button>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Nama Barang</th>
                <th scope="col">Stok</th>
                <th scope="col">Terjual</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="data in posts" :key="data.id">
                <td>{{data.nama}}</td>
                <td>{{data.nim}}</td>
                <td>{{data.email}}</td>
                <td>
                  <router-link :to="'/admin/edit/'+data.id" class="btn btn-warning">Edit</router-link>
                  <button class="btn btn-danger" data-toggle="modal" data-target="#modalDelete" v-on:click="prepareDeleteId = data.id">Hapus</button>
                </td>
              </tr>
            </tbody>
          </table>
          <nav aria-label="...">
            <ul class="pagination">
              <li class="page-item disabled" id="pagePrevious">
                <a class="page-link" href="#" v-on:click="page-=1; loadPersonList()">Previous</a>
              </li>
              <li class="page-item disabled">
                <a class="page-link">Page {{page}} of {{lastPage}}</a>
              </li>
              <li class="page-item" id="pageNext">
                <a class="page-link" href="#" v-on:click="page+=1; loadPersonList()">Next</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import NavComponent from "./Nav.vue";
import NavComponent2 from "./Nav2.vue";
export default {
  components: {
    navcomponent: NavComponent,
    navcomponent2: NavComponent2
  },
  data() {
    return {
      posts: [],
      prepareDeleteId: '',
      page: 1,
      lastPage: 1,
      mobileView: true,
      bantuhapus: false
    };
  },
  created() {
    this.handleView()
    window.addEventListener('resize', this.handleView)
    this.loadPersonList();
  },
  methods: {
     handleView() {
      this.mobileView = window.innerWidth <= 990;
    },
    loadPersonList() {
      axios.get('/api').then(response => {
        this.posts = response.data.data;
        // this.setPaging(response.data.current_page,response.data.last_page);
        // this.lastPage = response.data.last_page;
      });
    },
    deletePerson(){
      if(this.bantuhapus == false){
        $("#btnDelete").attr("class","btn btn-primary disabled").text("Processing...");
        this.bantuhapus == false
      }
      axios.delete("/api/admin/destroy/"+this.prepareDeleteId).then(response=>{
        this.loadPersonList();
        this.bantuhapus == true
      });
    },
    setPaging(current,last){ 
      if(current == 1){
        $("#pagePrevious").attr("class","page-item disabled");
      }else{
        $("#pagePrevious").attr("class","page-item");
      } 
      if(current == last){
        $("#pageNext").attr("class","page-item disabled");
      }else{
        $("#pageNext").attr("class","page-item");
      } 
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