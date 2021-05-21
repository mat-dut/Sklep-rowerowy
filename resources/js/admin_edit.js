// import Swal from "sweetalert2";

// $(document).ready(function () {
//     const index = $("#Table_id tr").length - 1;

//     for (var i = 1; i <= index; i++) {
//         $(`#btn_edit_${i}`).click(function () {
//             var element_data = $(this).data();
//             var inputs_html = "";

//             if (element_data["element_title"] != "") {
//                 inputs_html +=
//                     '<input type="text" id="element_title" class="swal2-input" placeholder="Tytuł">';
//             }
//             if (element_data["element_subtitle"] != "") {
//                 inputs_html +=
//                     '<input type="text" id="element_subtitle" class="swal2-input" placeholder="Podtytuł">';
//             }
//             if (element_data["element_content"] != "") {
//                 inputs_html +=
//                     '<input type="text" id="element_content" class="swal2-input" placeholder="Treść">';
//             }

//             console.log(inputs_html);

//             Swal.fire({
//                 title: "Edytuj",
//                 html: inputs_html,
//                 confirmButtonText: "Sign in",
//                 focusConfirm: false,
//                 preConfirm: () => {
//                     const element_title = Swal.getPopup().querySelector(
//                         "#element_title"
//                     ).value;
//                     if (element_data["element_subtitle"] != "") {
//                         const element_subtitle = Swal.getPopup().querySelector(
//                             "#element_content"
//                         ).value;
//                     }
//                     const element_content = Swal.getPopup().querySelector(
//                         "#element_content"
//                     ).value;
//                     if (!element_title || !element_content) {
//                         Swal.showValidationMessage(`Uzupełnij wszystkie pola`);
//                     }
//                     return {
//                         element_title: element_title,
//                         element_content: element_content,
//                     };
//                 },
//             }).then((result) => {
//                 Swal.fire(
//                     `
//                   Tytuł: ${result.value.element_title}
//                   Treść: ${result.value.element_content}
//                 `.trim()
//                 );
//             });
//         });
//     }
// });
