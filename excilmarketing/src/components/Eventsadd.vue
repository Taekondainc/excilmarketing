<template>
<div><div style=" color:white;">
<h1>Events Add</h1></div>
    <div id="gocenter">
        <div id="fldiv">
            <div>
                <form id="prodgt" @submit.prevent="publishEvent">
                    <h1>Add Event</h1>
                    <div>Events Name</div>
                    <input type="text" placeholder="Name" v-model="event" />
                    <div>Description</div>
                    <textarea placeholder="Description" rows="4" v-model="description"></textarea>
                    <div>Logo</div>
                    <input type="file" placeholder="Logo" @change="onfileupload($event)" />
                    <input type="submit" value="Submit" class="submt" />
                </form>
            </div>
            <div><img id="imgbusines" src="https://res.cloudinary.com/excil-marketing/image/upload/v1605512455/excil/gg2mAsset_1_oqcj4p.png"></div>
        </div>
        <div>
            <h1 style="text-align:center;">Products</h1>
            <div class="justdiv ">

                <input type="search" name="search" id="search" v-model="key" @keyup="getvalue" placeholder="Search">
            </div>
            <div class="columncreate">
                <div v-for="res in results" :key="res.id" class="justdiv">
                    <div class="displayproducts">
                        <div id="textprod">
                            <div id="divh1"> <img v-bind:src="'data:image/png/jpeg/jpg;base64,' + res.eventfile" id="imgbusines" /></div>
                            <div>
                                <h1>{{res.eventtitle}}</h1>
                                <div>{{res.description}}</div>
                                <div><button @click="edit(res.id)" id="btnshow">Edit</button></div> 
                                <div><button @click="Deleted(res.id)" id="btnshowd">Delete</button></div>
                         
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal" v-show="hiden">
    <div class="close" @click="close">Close</div>
      <form id="prodgt" @submit.prevent="upevent">
                    <h1>Update Products</h1>
                    <div>Event Name</div>
                    <input type="text" placeholder="Name" v-model="event2" />
                  <div>Description</div>
                    <textarea placeholder="Description" rows="4" v-model="description2"></textarea>
                  
                    <div>Logo</div>
                    <input type="file" placeholder="Logo" @change="onfileupload2($event)" />
                    
                    <input type="submit" value="Submit" class="submt" />
                </form>
    </div>
</div>
</template>

<script>
import axios from "axios";
export default {
    data() {
        return {
            event: "",
            product: "",
            FILE: null,
            description: "",
            category: "",
            nbr: "",
id1:"",
event2: "",
            product2: "",
            FILE2: null,
            description2: "",
            category2: "",
            nbr2: "",
changed:"",key:"",
            result: "",hiden:"",
            results: "",results2:""
        };
    },
    created() {
        axios.post("https://excilmarketing.com/campbell/public/api/viewEvents").then((res) => {
            this.results = res.data;
        }).catch( );
    },
    methods: {
        getvalue(){
axios.post("https://excilmarketing.com/campbell/public/api/searchEvents",{
    "key": this.key
}).then((res) => {
            this.results = res.data;
        }).catch( );
        },        
        upevent(){
if(this.changed=="changed"){
 const formdata = new FormData();
             formdata.append("file", this.FILE2);
            formdata.append("eventtitle", this.event2);
           
            formdata.append("description", this.description2);
             formdata.append("id", this.id1);
 formdata.append("changed", this.changed);
            axios
                .post("https://excilmarketing.com/campbell/public/api/editEvents", formdata)
                .then(res => {
                    this.result = res.data;   axios.post("https://excilmarketing.com/campbell/public/api/viewEvents").then((res) => {
            this.results = res.data;
        }).catch( );
                })
                .catch();
}else{
 const formdata = new FormData();
          
            formdata.append("eventtitle", this.event2);
           
            formdata.append("description", this.description2);
             formdata.append("id", this.id1); formdata.append("id", this.id1);

            axios
                .post("https://excilmarketing.com/campbell/public/api/editEvents", formdata)
                .then(res => {
                    this.result = res.data;   axios.post("https://excilmarketing.com/campbell/public/api/viewEvents").then((res) => {
            this.results = res.data;
        }).catch( );
                })
                .catch();
}
    },
        publishEvent() {
            console.log("occur");
            const formdata = new FormData();
            formdata.append("file", this.FILE);
            formdata.append("eventtitle", this.event);
           
            formdata.append("description", this.description);
            

            axios
                .post("https://excilmarketing.com/campbell/public/api/AddEvents", formdata)
                .then(res => {
                    this.result = res.data;  axios.post("https://excilmarketing.com/campbell/public/api/viewEvents").then(res => {
            this.results = res.data;
        }).catch()
                })
                .catch();
        },
        onfileupload(event) {
            this.FILE = event.target.files[0];
            console.log(this.FILE);
        }, onfileupload2(event) {
            this.changed="changed";
            this.FILE2 = event.target.files[0];
            console.log(this.FILE2);
        },
        close(){
this.hiden=!this.hiden;
        }
        ,
        edit(res){this.hiden=!this.hiden;
axios.post("https://excilmarketing.com/campbell/public/api/getEvents",{
    "id": res
}).then(res => {
                    this.results2 = res.data; 
                     Object.values(this.results2).forEach(value => {                       
              this.id1 = value.id;         
               this.event2 = value.eventtitle;                       
                        this.description2 = value.description;
 

});
                  
         } ).catch();
         },
        Deleted(res){
axios.post("https://excilmarketing.com/campbell/public/api/DeleteEvents",{
    "id": res
}).then(

    axios.post("https://excilmarketing.com/campbell/public/api/viewEvents").then(res => {
            this.results = res.data;
        }).catch()

        ).catch();
         }
        
      }
};
</script>

<style scoped>
* {
    font-family: "Oswald", cursive;
    letter-spacing: 2px;
    color: white;
}

h1 {
    font-size: 2vw;
}

input,
textarea {
    color: white;
    padding: 10px 10px;
    background-color: transparent;
    border-bottom: 2px solid white;
    border-radius: 3px;
    text-align: center;
}

#textprod {
    padding: 20px;
}

#prodgt {
    display: grid;
    width: 90%;
    grid-gap: 10px;
    border: 2px solid white;
    border-radius: 3px;
    padding: 10px;
    background: rgba(22, 22, 22, 0.767);
}

.submt {
    cursor: pointer;
    background-color: rgba(47, 107, 35, 0.596) !important;
    color: rgb(255, 255, 255);
    border: 2px solid white;
}

#gocenter {
    display: grid;
    align-content: center;
    justify-content: center;

    grid-gap: 20px;
}

#search {
    width: 95%;
    background-color: white;
    color: black;
    background-image: url("https://res.cloudinary.com/taekondainc-com/image/upload/v1603926504/assets/search_fiq9iw.png");
    background-size: 37px;
    background-repeat: no-repeat;
}

#search::placeholder {
    color: black;
    font-size: 15px;
}

.displayproducts {
display: block !important;
    align-content: center;
    justify-content: center;
    background: white;

    margin-top: 20px;
}

.displayproducts div h1 {
    color: black;
    font-size: 5vw;
}

.displayproducts div {
    color: black;

}

.displayproducts #divh1 {
    color: black;
    display: grid;
    align-content: center;
    justify-content: center;
}

#fldiv {
    display: grid;
    grid-template-columns: 45% 45%;
    align-content: center;
    justify-content: center;
    vertical-align: middle;
    grid-gap: 20px;
}

.justdiv {
    display: flex;
    justify-content: center;
    color: black;margin-bottom:20px;
}

::placeholder {
    color: white;
}

.columncreate {
    display: grid;
    grid-template-columns: 30% 30% 30%;
    grid-gap: 10px;
    align-content: center;
    justify-content: center;

}

@media only screen and (max-width: 1000px) and (min-width: 0px) {
    #gocenter {
        display: block;
    }

    #prodgt {
        width: unset;
    }.columncreate {display: block;}#fldiv{
        display: flex;
    flex-wrap: wrap-reverse;
}
}
</style>
