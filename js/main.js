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
        this.getDischi()
    },
    methods:{
        getDischi(){
            axios.get(this.apiUrl).then((response) =>{
                // logica
                this.listArray = response.data
            })
        },

    }
}).mount('#app');

// console.log('prova');