<template>
    <div>
 <h1>Make that first step with us to ensure your future</h1>
  <div class="displayform">
      <form @submit.prevent="upload" v-show="show">
     
      <div><h3>Company Name</h3></div>
        <input type="text" v-model="name" placeholder="companyx" />
        <div><h3>Contact</h3></div>
        <input type="text" v-model="contact" placeholder="592-613-1445 or grewhol@gmail.com" />
 <div><h3>Job Title</h3></div>
      <div class="title">{{this.title}}</div>


        
        <div><h3>Passport size picture</h3></div>
        <input type="file" @change="onfileupload($event)" />
      <div  class="nextw">
          <button type="submit" @click="hide3">Submit</button></div>  
    
      
      </form>  <div class="successdiv" v-show="ind">
          <div>Success</div>  
          <div><btn @click="back3">back
        </btn></div>  
        </div>
    </div>
    </div>
</template>

<script>
import axios from "axios";
export default {
  props: ["id", "title"],

  data() {
    return {
        ind:false,
        show:true,
      FILE: "",
      name: "",
      contact: "",
      jobtype: "",
      jobid: "",
      jobtitle: ""
    };
  },

  methods: {
 hide3(){
this.ind= !this.indi;  this.show = !this.show;
       },   back3(){
this.show = !this.show;  this.ind = !this.ind;
       },
    onfileupload(event) {
      this.FILE = event.target.files[0];
      console.log(this.FILE);
    },
    upload() {
      const formdata = new FormData();
      formdata.append("file", this.FILE);
      formdata.append("name", this.name);
      formdata.append("id", this.id);
      formdata.append("title", this.title);
      formdata.append("contact", this.contact);

      axios
        .post("https://excilmarketing.com/campbell/public/api/applyjob", formdata)
        .then(res => {
          this.result = res.data;
        })
        .catch();
    }
  }
};
</script>

<style   scoped>
h1 {
  color: aliceblue;
  text-align: center;
  font-family: "Poppins", sans-serif;
}
form {
  display: grid;
  grid-template-columns: 30%;
  justify-content: center;
  align-items: center;
  padding: 20px;
  background: rgba(0, 0, 0, 0.445);
}
input {
  padding: 5px;
  background-color: whitesmoke;

  width: 400px;
  font-family: "Poppins", sans-serif;
  border: 0px transparent;
  border-bottom: 5px solid rgb(91, 226, 197);
}
textarea {
  padding: 5px;
  background-color: whitesmoke;

  width: 400px;
  font-family: "Poppins", sans-serif;
  border: 0px transparent;
  border-bottom: 5px solid rgb(91, 226, 197);
}
.title {
  padding: 5px;
 
color: aliceblue;
  font-family: "Poppins", sans-serif;
  
}
h3 {
  color: whitesmoke;
}
.displayform {
  display: grid;
  justify-content: center;
  grid-template-columns: 100%;
  width: 100%;
}
.next {
  padding-top: 30px;
}
.nextw {
  padding-top: 20px;
  padding-bottom: 20px;
}
div btn {
  font-family: "Poppins", sans-serif;
  padding: 5px;
  padding-left: 2rem;
  margin-right: 0.5rem;
  color: white;
  padding-right: 2rem;
  border: 2px solid whitesmoke;
  border-radius: 5px;
  cursor: pointer;
}
button {
  font-family: "Poppins", sans-serif;
  padding: 5px;
  padding-left: 2rem;
  -webkit-text-stroke: 0.8px;
  letter-spacing: 1.4px;
  padding-right: 2rem;
  border: 2px solid whitesmoke;
  border-radius: 5px;
  cursor: pointer;
}
@media only screen and (max-width: 1000px) and (min-width: 0px) {
  input {
    width: 100% !important;
  }
  textarea {
    width: 100% !important;
  }
  form {
    display: grid;
    grid-template-columns: 80%;
  }
}
.successdiv {
  background: rgb(159, 235, 159);
  text-align: center;
  display: grid;
  justify-content: space-evenly;
  color: black;
  padding: 4rem;
  font-family: "Poppins", sans-serif;
  font-size: 4rem;
}
</style>