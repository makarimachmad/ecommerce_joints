<template>
<div>
    <navcomponent v-if="!mobileView"></navcomponent>
    <navcomponent2 v-if="mobileView"></navcomponent2>
    <br>
    <div class="container">
    <h1>Edit Data</h1>
        <div class="row justify-content-md-center">
            <div class="col card">
                
                <form @submit.prevent="updateBarang" enctype="multipart/form-data">
                    
                    <div class="form-group t-4">
                        <label for="kategori">Kategori</label>
                        <input type="textfield" class="form-control" id="kategori" placeholder="Katgori pakaian" name="kategori" ref="kategori">
                    </div>
                    <div class="form-group">nam
                        <label for="Nama">Nama</label>
                        <input type="textfield" class="form-control" id="nama" placeholder="Nama" name="nama" ref = "nama">
                        
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="textfield" class="form-control" id="harga" placeholder="Harga" name="harga" ref = "harga">
                        
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea class="form-control" id="deskripsi" rows="3" name="deskripsi" ref = "deskripsi"></textarea>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card mb-4">
                                <p>Foto lama</p>
                                <img :src="bantugambar" class="card-img-top .img-responsive" width=50% ref="gambarlama" name="gambarlama" id="gambarlama">
                            </div>
                            
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="gambar"></label>
                                <input type="file" class="form-control-file" id="gambar" name="gambar" ref="gambar">
                            </div>
                        </div>
                    </div>
                    <br><br>
                    <button type="submit" class="btn btn-primary justify-content-md-center" id="btnPerbarui">Perbarui</button>
                </form>
                    <!-- <button id="btncoba" v-on:click="cobaambilvalue()">percobaan</button> -->
                <br>
            </div>
            <br><br>
        </div>
    </div>
    <br>
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
                photo: null,
                bantugambar: '',
                bantugambar2: '',
                mobileView: true,
                cekgambar:''
            }
        },
        created(){
            this.handleView()
            window.addEventListener('resize', this.handleView)
            this.getDataBarang()
        },
        methods:{
            cobaambilvalue(){
                this.cekgambar = this.$refs.gambar.value

                if(this.$refs.gambar.value == NaN){
                    // this.cekgambar = this.$refs.gambarlama.value
                    console.log("kosong")
                }else{
                    this.cekgambar = this.bantugambar
                    console.log(this.cekgambar)
                }
                console.log(
                    this.$refs.kategori.value,
                    this.$refs.nama.value,
                    this.$refs.harga.value,
                    this.cekgambar,
                    this.$refs.deskripsi.value
                )
            },
            pilihGambar(event){
                this.photo = event.target.files[0]
            },
            handleView() {
                this.mobileView = window.innerWidth <= 990;
            },
            updateBarang() {
                $("#btnPerbarui").attr("class","btn btn-primary disabled").text("Processing...")
                axios.patch('/api/admin/'+this.$route.params.id,{
                    kategori: this.$refs.kategori.value,
                    nama: this.$refs.nama.value,
                    harga: this.$refs.harga.value,
                    gambar: this.cekgambar,
                    deskripsi: this.$refs.deskripsi.text
                })
                .then(response => {
                    this.$router.push({name: 'BerandaAdmin'});
                    console.log(response.data.data)
                })
                .catch(function (error) {
                    console.log(error);
                });
            },
            getDataBarang(){
                axios.get('/api/selengkapnya/'+this.$route.params.id).then(response => {
                    this.$refs.kategori.value = response.data.data.kategori;
                    this.$refs.nama.value = response.data.data.nama;
                    this.$refs.harga.value = response.data.data.harga;
                    this.bantugambar = response.data.data.gambar;
                    this.bantugambar2 = response.data.data.gambar;
                    console.log(this.bantugambar);
                    this.$refs.deskripsi.value = response.data.data.deskripsi;
                });
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