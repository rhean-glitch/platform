function handleAccountDeletion() {
    console.log("Account Deletion Confirmed and Initiated...");

    const modalElement = document.getElementById('deleteAccountModal');
    const modal = bootstrap.Modal.getInstance(modalElement);
    if (modal) {
        modal.hide();
    }

}