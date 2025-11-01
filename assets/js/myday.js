document.addEventListener('DOMContentLoaded', function () {
    const layout = document.getElementById('user-app-layout');
    const menuToggle = document.getElementById('menu-toggle');
    const taskListContainer = document.getElementById('task-list');

    const taskAddModalElement = document.getElementById('taskAddModal');
    const taskAddModal = new bootstrap.Modal(taskAddModalElement);
    const taskEditModalElement = document.getElementById('taskEditModal');
    const taskEditModal = new bootstrap.Modal(taskEditModalElement);

    let tasks = [
        { id: 1, title: 'Answer IT ERA Assignment', folder: 'IT ERA', date: '2025-10-31', isImportant: true, isCompleted: false },
        { id: 2, title: 'Study Platform Technologies slides', folder: 'Platform Technologies', date: '2025-11-01', isImportant: false, isCompleted: false },
        { id: 3, title: 'Watch new Marvel movie', folder: 'Movie Marathon', date: '2025-11-05', isImportant: false, isCompleted: true },
    ];
    let nextTaskId = 4; 

    function renderTasks() {
        taskListContainer.innerHTML = ''; 

        const folderItems = document.querySelectorAll('.folder-item');
        const folderOptions = Array.from(folderItems).map(item => ({
            name: item.dataset.folderName,
            color: item.dataset.folderColor
        }));
        const allFolders = ['My Day', 'Planned', 'Important', 'Completed', ...folderOptions.map(f => f.name)];

        const newFolderSelect = document.getElementById('new-task-folder');
        const editFolderSelect = document.getElementById('modal-edit-folder-select');
        newFolderSelect.innerHTML = '';
        editFolderSelect.innerHTML = '';

        allFolders.filter((value, index, self) => self.indexOf(value) === index).forEach(folder => {
            const option = document.createElement('option');
            option.value = folder;
            option.textContent = folder;
            newFolderSelect.appendChild(option.cloneNode(true));
            editFolderSelect.appendChild(option.cloneNode(true));
        });

        tasks.filter(task => !task.isCompleted).forEach(task => { 
            const folder = folderOptions.find(f => f.name === task.folder);
            const folderColor = folder ? folder.color : varToCSS('var(--primary-blue)');

            const taskItem = document.createElement('div');
            taskItem.className = `task-item ${task.isCompleted ? 'completed' : ''}`;
            taskItem.dataset.taskId = task.id;

            const dateDisplay = task.date ? new Date(task.date).toLocaleDateString('en-US', { month: 'short', day: 'numeric' }) : 'No Due Date';

            taskItem.innerHTML = `
                        <div class="form-check me-3">
                            <input class="form-check-input" type="checkbox" ${task.isCompleted ? 'checked' : ''} data-task-id="${task.id}">
                        </div>
                        <div class="task-details flex-grow-1">
                            <div class="task-title">${task.title}</div>
                            <div class="task-subtitle" style="color: ${folderColor};">${task.folder} | ${dateDisplay}</div>
                        </div>
                        <div class="task-star">
                            <i class="${task.isImportant ? 'fas' : 'far'} fa-star" data-task-id="${task.id}"></i>
                        </div>
                    `;
            taskListContainer.appendChild(taskItem);
        });

        attachTaskItemListeners();
    }

    function varToCSS(cssVar) {
        return getComputedStyle(document.documentElement).getPropertyValue(cssVar) || '#0d6efd'; 
    }


    // --- Task CRUD Logic ---

    function handleAddTask(e) {
        e.preventDefault();

        const titleInput = document.getElementById('new-task-title');
        const folderInput = document.getElementById('new-task-folder');
        const dateInput = document.getElementById('new-task-date');
        const importantInput = document.getElementById('new-task-important');

        const newTask = {
            id: nextTaskId++,
            title: titleInput.value.trim(),
            folder: folderInput.value,
            date: dateInput.value,
            isImportant: importantInput.checked,
            isCompleted: false
        };

        if (newTask.title) {
            tasks.push(newTask);
            renderTasks();
            taskAddModal.hide(); 
            document.getElementById('add-task-form').reset();
            alert('Task Added: ' + newTask.title);
        } else {
            alert('Please enter a task title.');
        }
    }


    function populateEditModal(taskId) {
        const task = tasks.find(t => t.id === taskId);
        if (!task) return;

        document.getElementById('modal-edit-task-id').value = task.id;

        document.getElementById('modal-edit-task-title').value = task.title;
        document.getElementById('modal-edit-due-date').value = task.date;
        document.getElementById('modal-edit-complete-check').checked = task.isCompleted;

        const folderDetails = document.getElementById('modal-edit-task-folder');
        const dateDetails = document.getElementById('modal-edit-task-date');
        const starDetails = document.getElementById('modal-edit-task-star');
        const folderSelect = document.getElementById('modal-edit-folder-select');

        folderDetails.innerHTML = `<i class="fas fa-list-ul"></i> ${task.folder}`;
        dateDetails.innerHTML = `<i class="fas fa-calendar-alt"></i> ${task.date ? new Date(task.date).toLocaleDateString() : 'No Due Date'}`;
        starDetails.innerHTML = `<i class="${task.isImportant ? 'fas' : 'far'} fa-star"></i> Important`;

        folderSelect.value = task.folder;

        taskEditModal.show();
    }


    function handleSaveTask() {
        const taskId = parseInt(document.getElementById('modal-edit-task-id').value);
        const taskIndex = tasks.findIndex(t => t.id === taskId);

        if (taskIndex !== -1) {
            tasks[taskIndex].title = document.getElementById('modal-edit-task-title').value.trim();
            tasks[taskIndex].folder = document.getElementById('modal-edit-folder-select').value;
            tasks[taskIndex].date = document.getElementById('modal-edit-due-date').value;
            tasks[taskIndex].isCompleted = document.getElementById('modal-edit-complete-check').checked;

            renderTasks();
            taskEditModal.hide();
            alert(`Task "${tasks[taskIndex].title}" Updated!`);
        }
    }

    function handleDeleteTask() {
        const taskId = parseInt(document.getElementById('modal-edit-task-id').value);

        if (confirm('Are you sure you want to delete this task?')) {
            const initialLength = tasks.length;
            tasks = tasks.filter(t => t.id !== taskId);

            if (tasks.length < initialLength) {
                renderTasks();
                taskEditModal.hide();
                alert('Task Deleted.');
            }
        }
    }

    function toggleCompletion(taskId, isCompleted) {
        const taskIndex = tasks.findIndex(t => t.id === taskId);
        if (taskIndex !== -1) {
            tasks[taskIndex].isCompleted = isCompleted;
            renderTasks();
            alert(`Task marked as ${isCompleted ? 'Completed' : 'Incomplete'}!`);
        }
    }

    function toggleImportance(taskId) {
        const taskIndex = tasks.findIndex(t => t.id === taskId);
        if (taskIndex !== -1) {
            tasks[taskIndex].isImportant = !tasks[taskIndex].isImportant;
            renderTasks();
        }
    }


    function attachTaskItemListeners() {
        document.querySelectorAll('.task-item').forEach(item => {
            item.removeEventListener('click', itemClickListener);
            item.addEventListener('click', itemClickListener);
        });

        document.querySelectorAll('.task-item .form-check-input').forEach(checkbox => {
            checkbox.removeEventListener('change', checkboxListener);
            checkbox.addEventListener('change', checkboxListener);
        });

        document.querySelectorAll('.task-item .task-star i').forEach(star => {
            star.removeEventListener('click', starClickListener);
            star.addEventListener('click', starClickListener);
        });
    }

    const itemClickListener = function (e) {
        if (e.target.closest('.form-check') || e.target.closest('.task-star')) {
            return;
        }
        const taskId = parseInt(this.dataset.taskId);
        populateEditModal(taskId);
    };

    const checkboxListener = function () {
        const taskId = parseInt(this.dataset.taskId);
        toggleCompletion(taskId, this.checked);
    };

    const starClickListener = function (e) {
        e.stopPropagation();
        const taskId = parseInt(this.dataset.taskId);
        toggleImportance(taskId);
    };


    document.getElementById('add-task-form').addEventListener('submit', handleAddTask);
    document.getElementById('save-task-btn').addEventListener('click', handleSaveTask);
    document.getElementById('delete-task-btn').addEventListener('click', handleDeleteTask);

    document.getElementById('modal-edit-complete-check').addEventListener('change', function () {
        const taskId = parseInt(document.getElementById('modal-edit-task-id').value);
        const taskIndex = tasks.findIndex(t => t.id === taskId);
        if (taskIndex !== -1) {
            tasks[taskIndex].isCompleted = this.checked;
        }
    });



    if (window.innerWidth > 768) {
        layout.classList.remove('toggled');
    } else {
        layout.classList.add('toggled');
    }

    menuToggle.addEventListener('click', function () {
        layout.classList.toggle('toggled');
    });

    document.querySelectorAll('.sidebar-item').forEach(item => {
        item.addEventListener('click', () => {
            if (window.innerWidth <= 768) {
                layout.classList.add('toggled');
            }
        });
    });

    window.addEventListener('resize', function () {
        if (window.innerWidth > 768) {
            layout.classList.remove('toggled');
        }
    });

    renderTasks();
});