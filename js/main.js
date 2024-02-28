const {createApp} = Vue

createApp({
    data(){
        return{
            music: 'canzoni',
            apiUrl: 'server.php',
            listArray: [ ],
        }
    },
    mounted(){
        this.readList()
    },
    methods:{
        readList(){
            axios.get(this.apiUrl).then((response) =>{
                // logica
                this.listArray = response.data
            })
        }
    }
}).mount('#app');

// console.log('prova');