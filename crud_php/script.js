document.addEventListener('DOMContentLoaded', function () {
    var editModal = document.getElementById('editModal');
    var deleteModal = document.getElementById('deleteModal');
    var span = document.getElementsByClassName('close');

    function closeModal(modal) {
        modal.style.display = 'none';
    }

    span[0].onclick = function () {
        closeModal(editModal);
    }

    span[1].onclick = function () {
        closeModal(deleteModal);
    }
    window.onclick = function (event) {
        if (event.target == editModal) {
            closeModal(editModal);
        }
        if (event.target == deleteModal) {
            closeModal(deleteModal);
        }
    }

    window.editUser = function (id) {
        fetch(`get_user.php?id=${id}`)
            .then(response => response.json())
            .then(data => {
                document.getElementById('editId').value = data.id;
                document.getElementById('editNome').value = data.nome;
                document.getElementById('editEmail').value = data.email;
                document.getElementById('editIdade').value = data.idade;
                document.getElementById('editProfissao').value = data.profissao;
                editModal.style.display = 'block';
            });
    }
    window.deleteUser = function (id, nome) {
        document.getElementById('deleteMessage').innerText = `Deseja de fato excluir o usuário ${nome}?`;
        deleteModal.style.display = 'block';

        document.getElementById('confirmDelete').onclick = function () {
            fetch(`delete.php`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: `id=${id}`
            })
                .then(() => {
                    alert(`${nome} excluído com sucesso!`);
                    location.reload();
                });
        }

        document.getElementById('cancelDelete').onclick = function () {
            closeModal(deleteModal);
        }
    }
});

let target = document.querySelector("body");
let modalContent = document.getElementsByClassName("modal");
if(modalContent.display === 'block'){
    target.style.filter = "blur(5px)";
}
