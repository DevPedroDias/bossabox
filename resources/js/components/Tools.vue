<template>
    <div>
        <h2>Oi</h2>
        <div v-for="tool in tools" v-bind:key="tool.id">
            {{tool.title}}
        </div>
    </div>
</template>
<script>
export default {
data(){
    return{
        'tools': []
    }
},
mounted(){
    this.getTools();
},
methods:{
    getTools(){
        axios.get('api/tools')
        .then(response => {
            this.tools = response.data;
        })
        .catch(error =>{
            console.log(error)
        });
    }
}
}
</script>
