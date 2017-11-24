<template>
    <div class='row'>
        <h1>Мои задачи</h1>
        <h4>Новая задача</h4>
        <form action="#" @submit.prevent="createTask()">
            <div class="input-group">
                <input v-model="task.body" type="text" name="body" style="width: 60%" class="form-control" autofocus>
                <span>
                    <button type="submit" class="btn btn-primary">Добавить</button>
                </span>
            </div>
            <h4>Описание</h4>
            <div class="form-group">
                <textarea  v-model="task.text" type="text" name="text" style="width: 60%" class="form-control" autofocus></textarea>
            </div>
        </form><hr>
        <h4>Все задачи</h4>
        <ul class="list-group" style="width: 60%">
            <li v-if='list.length === 0'>На данный момент задач нет!</li>
            <li class="list-group-item" v-for="(task, index) in list">
                <b>{{ task.body }}</b>
                {{ task.text }}
                 <button @click="deleteTask(task.id)" class="btn btn-danger btn-xs pull-right">удалить</button>
            </li>
        </ul>
    </div>
</template>
<script>
    export default {
        data() {
            return {
                list: [],
                task: {
                    id: '',
                    body: '',
                    text: ''
                }
            };
        },

        created() {
            this.fetchTaskList();
        },

        methods: {
            fetchTaskList() {
                axios.get('api/tasks').then((res) => {
                    this.list = res.data;
                });
            },

            createTask() {
                axios.post('api/tasks', this.task)
                    .then((res) => {
                        this.task.body = '';
                        this.edit = false;
                        this.fetchTaskList();
                    })
                    .catch((err) => console.error(err));
            },

            deleteTask(id) {
                axios.delete('api/tasks/' + id)
                    .then((res) => {
                        this.fetchTaskList()
                    })
                    .catch((err) => console.error(err));
            },
        }
    }
</script>