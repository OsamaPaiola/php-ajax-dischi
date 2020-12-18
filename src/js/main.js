import Vue from "vue";
import axios from "axios";

const app = new Vue({
  el:'#app',
  data:{
    albums:[],
  },
  created(){
    // GET axios
    // console.log(window.location.href);
    const Url = window.location.href + 'server/json-script.php'
    axios.get(Url)
    .then( response => {
      // handle success
      console.log(response.data);
      this.albums = response.data;
    })
    .catch(error => {
      // handle error
      console.log(error);
    })

  },
});
