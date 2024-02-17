<template>
    <div>
 <h1>Post Your Vacancy</h1>
  <div class="displayform">
      <form @submit.prevent="upload">
    <div v-show="show">  
      <div><h3>Company Name</h3></div>
        <input type="text" v-model="company" placeholder="companyx" />
        <div><h3>Contact</h3></div>
        <input type="text" v-model="contact" placeholder="592-613-1445 or grewhol@gmail.com" />
<div class="next">  <btn @click="hide1">next
        </btn></div>
      
        </div>
 
 <div v-show="show1">

        <div><h3>Job Title</h3></div>
        <input type="text" v-model="jttitle" placeholder="Title"   />
        <div><h3>Job description</h3></div>
        <textarea type="text" v-model="desccompany" rows="5"  placeholder="Tell us more " ></textarea> 
        <div><h3>Job Location</h3></div>
        <input type="text" v-model="loccompany" placeholder="21 jules streets"  />
      <div class="next"> <btn @click="back1">back
        </btn><btn @click="hide2">next
        </btn></div>  
</div  >
      <div v-show="show2">  <div><h3>Job Type</h3></div>
        <input type="text" v-model="jobtype" placeholder="e.g Accounts"/>
        
        <div><h3>Logo</h3></div>
        <input type="file" @change="onfileupload($event)" />
      <div  class="nextw"><button type="submit" @click="hide3">Submit</button></div>  
     <div class="next"> <btn @click="back2">back
        </btn></div>  </div>
        <div class="successdiv" v-show="ind">
          <div>Success</div>  
            <div><btn @click="back3">back
        </btn></div>
        </div>
      </form>
    </div>
    </div>
</template>

<script>
import axios from "axios";
export default {
  data() {
    return {
        ind:false,
        show:true, show1:false, show2:false,
      FILE:"",
      company:"",
      jttitle:"",
      desccompany:"",
      loccompany:"",
      contact:"",
      jobtype:"",
      
	  jobs:[],
	  key:""
    }
  },
 
  
  methods: {
	   hide1(){
this.show1 = !this.show1;  this.show = !this.show;
       }, hide2(){
this.show1 = !this.show1;  this.show2 = !this.show2;
       },   back1(){
this.show1 = !this.show1;  this.show = !this.show;
       }, back2(){
this.show1 = !this.show1;  this.show2 = !this.show2;
       },

 hide3(){
this.ind= !this.indi;  this.show2 = !this.show2;
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
      formdata.append("company", this.company);
      formdata.append("jttitle", this.jttitle);
      formdata.append("desccompany", this.desccompany);
      formdata.append("loccompany", this.loccompan);
         formdata.append("contact", this.contact);
            formdata.append("jobtype", this.jobtype);
              
      axios
        .post("https://excilmarketing.com/campbell/public/api/addjoblisting", formdata)
        .then(res => {
          this.result = res.data;
        })
        .catch();
    }
  }
};
</script>

<style   scoped>
h1{
    color: aliceblue;
    text-align: center;font-family: 'Poppins', sans-serif; 
}
form{
  
    display: grid;grid-template-columns: 30%;
    justify-content: center;
    align-items: center;
    padding: 20px;
    background: rgba(0, 0, 0, 0.445);
}input{
    padding:5px;
    background-color: whitesmoke;
   
width:400px;font-family: 'Poppins', sans-serif; 
border: 0px transparent;
border-bottom: 5px  solid rgb(91, 226, 197);  

}textarea{
    padding:5px;
    background-color: whitesmoke;
   
width:400px;font-family: 'Poppins', sans-serif; 
border: 0px transparent;
border-bottom: 5px  solid rgb(91, 226, 197);  

}h3{
    color: whitesmoke;
}
.displayform{
   display: grid;
   justify-content: center;
   grid-template-columns: 100%;
   width: 100%;
}.next{
    padding-top:30px;
}.nextw{
    padding-top:20px;padding-bottom:20px;
}
div btn{font-family: 'Poppins', sans-serif; 
    padding:5px;
    padding-left:2rem;
    margin-right: 0.5rem;color: white;
    padding-right:2rem;
    border:2px solid whitesmoke;
    border-radius: 5px;
cursor: pointer;
}button{
    font-family: 'Poppins', sans-serif; 
    padding:5px;
    padding-left:2rem;
    -webkit-text-stroke: 0.8px;
    letter-spacing: 1.4px;
    padding-right:2rem;
    border:2px solid whitesmoke;
    border-radius: 5px;
cursor: pointer;
}@media only screen and (max-width: 1000px) and (min-width: 0px) {
    input{
        width: 100% !important;
    }
    textarea{
      width: 100% !important;  
    }
form{
  
    display: grid;grid-template-columns: 80%;}
}
.successdiv{
    background: rgb(159, 235, 159);
    text-align: center;display: grid;
    justify-content: space-evenly;
    color: black;
    padding:4rem;
    font-family: 'Poppins', sans-serif;
    font-size: 4rem;
}
</style>