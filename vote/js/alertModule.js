export const WarningMessage = () => {
	const Toast = Swal.mixin({
		toast: true,
		position: "top-end",
		showConfirmButton: false,
		timer: 3000,
		timerProgressBar: true,
  background: "#000",
		didOpen: (toast) => {
			toast.onmouseenter = Swal.stopTimer;
			toast.onmouseleave = Swal.resumeTimer;
		}
	});
	Toast.fire({
		icon: "warning",
		title: "<span style='color: #fff;'>ข้อมูลว่างเปล่า กรอกใหม่</span>"
	});
}
export const ErrorMessage = (msg) => {
	const Toast = Swal.mixin({
		toast: true,
		position: "top-end",
		showConfirmButton: false,
		timer: 3000,
		timerProgressBar: true,
  background: "#000",
		didOpen: (toast) => {
			toast.onmouseenter = Swal.stopTimer;
			toast.onmouseleave = Swal.resumeTimer;
		}
	});
	Toast.fire({
		icon: "error",
		title: `<span style='color: #fff;'>เกิดข้อผิดพลาด ${msg}</span>`
	});
}
export const SuccessMessage = (name) => {
	const Toast = Swal.mixin({
		toast: true,
		position: "top-end",
		showConfirmButton: false,
		timer: 3000,
		timerProgressBar: true,
  background: "#000",
		didOpen: (toast) => {
			toast.onmouseenter = Swal.stopTimer;
			toast.onmouseleave = Swal.resumeTimer;
		}
	});
	Toast.fire({
		icon: "success",
		title: `<span style='color: #fff;'>สำเร็จ ${name}</span>`
	});
}

export const successVoted = () => {
	const Toast = Swal.mixin({
		toast: true,
		position: "top-end",
		showConfirmButton: false,
		timer: 3000,
		timerProgressBar: true,
  background: "#000",
  zIndex: 6,
		didOpen: (toast) => {
			toast.onmouseenter = Swal.stopTimer;
			toast.onmouseleave = Swal.resumeTimer;
		}
	});
	Toast.fire({
		icon: "success",
		title: `<span style='color: #fff;'>โหวตสำเร็จ!</span>`
	});
}

export const duplicate  = () => {
	const Toast = Swal.mixin({
		toast: true,
		position: "top-end",
		showConfirmButton: false,
		timer: 3000,
		timerProgressBar: true,
  background: "#000",
  zIndex: 6,
		didOpen: (toast) => {
			toast.onmouseenter = Swal.stopTimer;
			toast.onmouseleave = Swal.resumeTimer;
		}
	});
	Toast.fire({
		icon: "error",
		title: `<span style='color: #fff;'>เกิดข้อผิดพลาด ห้ามโหวตซ้ำ!</span>`
	});
}
