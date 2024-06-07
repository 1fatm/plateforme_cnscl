
<style>
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

.sidebar {
    background-color: #333;
    color: #fff;
    width: 250px;
    padding: 20px;
    height: 100vh;
    transition: all 0.3s;
}

.sidebar.active {
    margin-left: -250px;
}

.content {
    margin-left: 0;
    transition: all 0.3s;
}

.content.active {
    margin-left: 250px;
}

.dashboard {
    display: flex;
    justify-content: space-around;
    align-items: flex-start;
    margin: 20px;
}

.widget {
    background-color: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    width: 45%;
}

h2 {
    margin-top: 0;
    color: #333;
}

span {
    font-weight: bold;
    color: #007bff;
}

ul {
    padding: 0;
    margin: 0;
    list-style-type: none;
}

li {
    padding: 5px 0;
}

li:nth-child(odd) {
    background-color: #f9f9f9;
}

</style><div class="sidebar" id="sidebar">
        <h2>Menu</h2>
        <ul>
            <li><a href="#">Accueil</a></li>
            <li><a href="#">Projet 1</a></li>
            <li><a href="#">Projet 2</a></li>
            <li><a href="#">Projet 3</a></li>
        </ul>
    </div>
    <div class="content" id="content">
        <button onclick="toggleSidebar()">Toggle Sidebar</button>
        <div class="dashboard">
            <div class="widget">
                <h2>Statistiques</h2>
                <p>Nombre total de projets: <span>10</span></p>
                <p>Projets en cours: <span>5</span></p>
                <p>Projets terminés: <span>5</span></p>
            </div>
            <div class="widget">
                <h2>Tâches</h2>
                <ul>
                    <li>Tâche 1</li>
                    <li>Tâche 2</li>
                    <li>Tâche 3</li>
                </ul>
            </div>
        </div>
    </div>
    <script >
        function toggleSidebar() {
    var sidebar = document.getElementById("sidebar");
    sidebar.classList.toggle("active");
    var content = document.getElementById("content");
    content.classList.toggle("active");
}


    </script>