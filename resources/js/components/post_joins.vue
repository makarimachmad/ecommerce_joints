<template>
  <div id="app">
    <img width="25%" src="./assets/logo.png">

    <form>
    </form>
      <input type="text" id="kategori" name="kategori" placeholder="kategori">
      <input type="text" id="nama" name="nama" placeholder="nama">
      <input type="text" id="harga" name="harga" placeholder="harga">
      <input type="file" id="gambar" name="gambar" placeholder="gambar">
      <textarea id="deskripsi" name="deskripsi" placeholder="deskripsi"></textarea>
      
    <br>
    
    <button class="btn-example" @click="postUserData">Click Me!</button>

    <ul>
      <li v-for="user in users" :key="user.id" >{{user.nama}}</li>
    </ul>

  </div>
</template>

<script>
import axios from "axios";
//import HelloWorld from "./components/HelloWorld";

export default {
  name: "App",
  components: {
//    HelloWorld
  },
  data() {
    return {
      users: []
    };
  },
  methods: {
    
    postUserData() {
      
      const kategori = document.getElementById('kategori').value
      
      const nama = document.getElementById('nama').value
      const harga = document.getElementById('harga').value
      
      const gambar = document.getElementById('gambar').value

      const deskripsi = document.getElementById('deskripsi').value

      axios
      .post('https://jcloth.herokuapp.com/admin/proses',{
        kategori : kategori,
        nama : nama,
        harga : harga,
        gambar : gambar,
        deskripsi : deskripsi
      })
      .then(response => {
        this.users = response.data.data
        console.log(this.users)
      })
      .catch(error => {
        console.log(error)
      })
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
