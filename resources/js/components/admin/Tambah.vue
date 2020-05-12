<template>
<div>
    <navcomponent v-if="!mobileView"></navcomponent>
    <navcomponent2 v-if="mobileView"></navcomponent2>
    <br>
    <div class="container">
    <h1>Tambah Data</h1>
        <div class="row justify-content-md-center">
            <div class="col card">
                <br>
                <form @submit.prevent="addBarang" enctype="multipart/form-data">
                    
                    <div class="form-group mt-4">
                        <label for="kategori">Kategori</label>
                        <input type="text" class="form-control" id="kategori" placeholder="Katgori pakaian" name="kategori" required ref="kategori">
                    </div>
                    <div class="form-group">nam
                        <label for="Nama">Nama</label>
                        <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama" required ref="nama">
                        
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="text" class="form-control" id="harga" placeholder="Harga" name="harga" required ref="harga">
                        
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea class="form-control" id="deskripsi" rows="3" name="deskripsi" required ref="deskripsi"></textarea>
                        
                    </div>
                    <div class="form-group">
                        <label for="gambar"></label>
                        <input type="file" class="form-control-file" id="gambar" name="gambar" ref="gambar">
                    </div>
                    <br><br>
                    <button type="submit" class="btn btn-primary" id="btnSubmit">Submit</button>
                </form>
                <br>
            </div>
            <br><br>
        </div>
    </div>
    
</div>
</template>

<script>
import NavComponent from "./Nav.vue"
import NavComponent2 from "./Nav2.vue"
export default {
    components:{
        navcomponent : NavComponent,
        navcomponent2 : NavComponent2
    },
    data(){
        return{
            mobileView: true
        }
    },
    created(){
        this.handleView()
        window.addEventListener('resize', this.handleView)
    },
    methods:{
        handleView() {
            this.mobileView = window.innerWidth <= 990;
        },
        addBarang(){
        //     axios({
        //         method: 'post',
        //         url: '/api/admin/proses',
        //         data: {
        //             kategori : this.$refs.kategori.value,
        //             nama : this.$refs.nama.value,
        //             harga : this.$refs.harga.value,
        //             gambar : this.$refs.gambar.value,
        //             deskripsi : this.$refs.deskripsi.value
        //         }
        //     })
            axios.post('/api/admin/proses',{ 
                kategori : this.$refs.kategori.value,
                nama : this.$refs.nama.value,
                harga : this.$refs.harga.value,
                gambar : this.$refs.gambar.value,
                deskripsi : this.$refs.deskripsi.value
            })
            .then(response => {
            console.log(response.data.data)
                // console.log(
                //         this.$refs.kategori.value,
                //         this.$refs.nama.value,
                //         this.$refs.harga.value,
                //         this.$refs.gambar.value,
                //         this.$refs.deskripsi.value
                //     )
            })
            // .catch(function (error) {
            //     console.log(error.response);
            // });
        }
    }
}
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