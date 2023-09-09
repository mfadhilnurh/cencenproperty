<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Sub Kategori Pilihan</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
    <style>
      /* Dijual-Emas */
      .dijual {
        background-color: #bc9c22;
      }
      .dijual .badge {
        color: #bc9c22;
      }
      .dijual p {
        color: black;
      }
      /* Dijual-Emas */

      /* Disewa-Biru */
      .disewa {
        background-color: #366ace;
      }
      .disewa .badge {
        color: #366ace;
      }
      .disewa p {
        color: black;
      }
      /* Disewa-Biru */
    </style>
  </head>
  <body>
    <div class="container">
      <!--Seacrh bar-->
      <nav class="navbar my-5">
        <div class="container-fluid p-0">
          <form class="d-flex" role="search">
            <input
              class="form-control"
              type="search"
              placeholder="Cari"
              aria-label="Cari"
              style="
                border-color: #bc9c22;
                border-bottom-right-radius: 0;
                border-top-right-radius: 0;
              "
            />
            <button
              class="btn"
              type="submit"
              style="
                background-color: #bc9c22;
                border-top-left-radius: 0;
                border-bottom-left-radius: 0;
              "
            >
              <i class="fa-solid fa-magnifying-glass" style="color: white"></i>
            </button>
          </form>
        </div>
      </nav>
      <!--Seacrh bar-->
      <!--Card-->
      <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 mb-5">
        <!--Card Dijual-->
        <div class="col">
          <div class="card h-100">
            <img
              src="./images/Cencen Property Logo (Sosmed).png"
              class="card-img-top"
              alt="..."
            />
            <!--Hot list-->
            <div class="card-img-overlay d-flex justify-content-end">
              <p
                class="badge bg-danger text-wrap"
                style="
                  color: white;
                  font-size: 15px;
                  height: 50px;
                  width: 50px;
                  border-radius: 50%;
                  padding: 10px;
                "
              >
                Hot List
              </p>
            </div>
            <!--Hot list-->
            <div class="dijual">
              <div class="card-body py-1 h-100">
                <div class="row d-flex">
                  <p
                    class="card-title mb-0"
                    style="font-weight: bold; color: white"
                  >
                    Cencen Property
                  </p>
                  <div class="d-flex">
                    <div class="flex-grow-1">
                      <p
                        class="card-text mb-0"
                        style="color: white; font-size: 13px"
                      >
                        Jakarta Pusat
                      </p>
                      <p
                        class="badge bg-light text-wrap mb-0"
                        style="font-size: 9px"
                      >
                        Rumah
                      </p>
                      <p
                        class="badge bg-light text-wrap mb-2"
                        style="font-size: 9px"
                      >
                        Furnished
                      </p>
                    </div>
                    <div class="d-flex px-2">
                      <div
                        class="vertical-line"
                        style="
                          border-right: 3px solid white;
                          height: 80%;
                          margin-top: 6px;
                        "
                      ></div>
                    </div>

                    <div class="d-flex align-items-center">
                      <p
                        class="badge bg-light text-wrap p-2 py-3 mb-0"
                        style="font-size: 13px"
                      >
                        Dijual
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="dijual">
              <div class="card-body py-1" style="background-color: white">
                <p
                  class="card-text pb-1"
                  style="margin-bottom: 0; margin-top: 0; font-size: 13px"
                >
                  Rp500.000.000,-
                </p>
                <div class="d-flex">
                  <div class="pe-2">
                    <p style="font-size: 12px">
                      <i class="fa-solid fa-bed"></i> 1+1
                    </p>
                  </div>
                  <div class="pe-2">
                    <p style="font-size: 12px">
                      <i class="fa-solid fa-bath"></i> 2
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--Card Dijual-->
        <!--Card Disewa-->
        <div class="col">
          <div class="card h-100">
            <img
              src="./images/Cencen Property Logo (Sosmed).png"
              class="card-img-top"
              alt="..."
            />
            <div class="disewa">
              <div class="card-body py-1 h-100">
                <div class="row d-flex">
                  <p
                    class="card-title mb-0"
                    style="font-weight: bold; color: white"
                  >
                    Cencen Property
                  </p>
                  <div class="d-flex">
                    <div class="flex-grow-1">
                      <p
                        class="card-text mb-0"
                        style="color: white; font-size: 13px"
                      >
                        Jakarta Pusat
                      </p>
                      <p
                        class="badge bg-light text-wrap mb-0"
                        style="font-size: 9px"
                      >
                        Apartemen
                      </p>
                      <p
                        class="badge bg-light text-wrap mb-2"
                        style="font-size: 9px"
                      >
                        Semi Furnished
                      </p>
                    </div>
                    <div class="d-flex px-2">
                      <div
                        class="vertical-line"
                        style="
                          border-right: 3px solid white;
                          height: 80%;
                          margin-top: 6px;
                        "
                      ></div>
                    </div>

                    <div class="d-flex align-items-center">
                      <p
                        class="badge bg-light text-wrap p-2 py-3 mb-0"
                        style="font-size: 13px"
                      >
                        Disewa
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="disewa">
              <div class="card-body py-1" style="background-color: white">
                <p
                  class="card-text pb-1"
                  style="margin-bottom: 0; margin-top: 0; font-size: 13px"
                >
                  Rp500.000.000,-
                </p>
                <div class="d-flex">
                  <div class="pe-2">
                    <p style="font-size: 12px">
                      <i class="fa-solid fa-bed"></i> 1+1
                    </p>
                  </div>
                  <div class="pe-2">
                    <p style="font-size: 12px">
                      <i class="fa-solid fa-bath"></i> 2
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--Card Disewa-->
        <!--Card Dijual-->
        <div class="col">
          <div class="card h-100">
            <img
              src="./images/Cencen Property Logo (Sosmed).png"
              class="card-img-top"
              alt="..."
            />
            <!--Hot list-->
            <div class="card-img-overlay d-flex justify-content-end">
              <p
                class="badge bg-danger text-wrap"
                style="
                  color: white;
                  font-size: 15px;
                  height: 50px;
                  width: 50px;
                  border-radius: 50%;
                  padding: 10px;
                "
              >
                Hot List
              </p>
            </div>
            <!--Hot list-->
            <div class="dijual">
              <div class="card-body py-1 h-100">
                <div class="row d-flex">
                  <p
                    class="card-title mb-0"
                    style="font-weight: bold; color: white"
                  >
                    Cencen Property
                  </p>
                  <div class="d-flex">
                    <div class="flex-grow-1">
                      <p
                        class="card-text mb-0"
                        style="color: white; font-size: 13px"
                      >
                        Jakarta Pusat
                      </p>
                      <p
                        class="badge bg-light text-wrap mb-0"
                        style="font-size: 9px"
                      >
                        Rumah
                      </p>
                      <p
                        class="badge bg-light text-wrap mb-2"
                        style="font-size: 9px"
                      >
                        Furnished
                      </p>
                    </div>
                    <div class="d-flex px-2">
                      <div
                        class="vertical-line"
                        style="
                          border-right: 3px solid white;
                          height: 80%;
                          margin-top: 6px;
                        "
                      ></div>
                    </div>

                    <div class="d-flex align-items-center">
                      <p
                        class="badge bg-light text-wrap p-2 py-3 mb-0"
                        style="font-size: 13px"
                      >
                        Dijual
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="dijual">
              <div class="card-body py-1" style="background-color: white">
                <p
                  class="card-text pb-1"
                  style="margin-bottom: 0; margin-top: 0; font-size: 13px"
                >
                  Rp500.000.000,-
                </p>
                <div class="d-flex">
                  <div class="pe-2">
                    <p style="font-size: 12px">
                      <i class="fa-solid fa-bed"></i> 1+1
                    </p>
                  </div>
                  <div class="pe-2">
                    <p style="font-size: 12px">
                      <i class="fa-solid fa-bath"></i> 2
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--Card Dijual-->
        <!--Card Disewa-->
        <div class="col">
          <div class="card h-100">
            <img
              src="./images/Cencen Property Logo (Sosmed).png"
              class="card-img-top"
              alt="..."
            />
            <div class="disewa">
              <div class="card-body py-1 h-100">
                <div class="row d-flex">
                  <p
                    class="card-title mb-0"
                    style="font-weight: bold; color: white"
                  >
                    Cencen Property
                  </p>
                  <div class="d-flex">
                    <div class="flex-grow-1">
                      <p
                        class="card-text mb-0"
                        style="color: white; font-size: 13px"
                      >
                        Jakarta Pusat
                      </p>
                      <p
                        class="badge bg-light text-wrap mb-0"
                        style="font-size: 9px"
                      >
                        Apartemen
                      </p>
                      <p
                        class="badge bg-light text-wrap mb-2"
                        style="font-size: 9px"
                      >
                        Semi Furnished
                      </p>
                    </div>
                    <div class="d-flex px-2">
                      <div
                        class="vertical-line"
                        style="
                          border-right: 3px solid white;
                          height: 80%;
                          margin-top: 6px;
                        "
                      ></div>
                    </div>

                    <div class="d-flex align-items-center">
                      <p
                        class="badge bg-light text-wrap p-2 py-3 mb-0"
                        style="font-size: 13px"
                      >
                        Disewa
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="disewa">
              <div class="card-body py-1" style="background-color: white">
                <p
                  class="card-text pb-1"
                  style="margin-bottom: 0; margin-top: 0; font-size: 13px"
                >
                  Rp500.000.000,-
                </p>
                <div class="d-flex">
                  <div class="pe-2">
                    <p style="font-size: 12px">
                      <i class="fa-solid fa-bed"></i> 1+1
                    </p>
                  </div>
                  <div class="pe-2">
                    <p style="font-size: 12px">
                      <i class="fa-solid fa-bath"></i> 2
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--Card Disewa-->
        <!--Card Dijual-->
        <div class="col">
          <div class="card h-100">
            <img
              src="./images/Cencen Property Logo (Sosmed).png"
              class="card-img-top"
              alt="..."
            />
            <!--Hot list-->
            <div class="card-img-overlay d-flex justify-content-end">
              <p
                class="badge bg-danger text-wrap"
                style="
                  color: white;
                  font-size: 15px;
                  height: 50px;
                  width: 50px;
                  border-radius: 50%;
                  padding: 10px;
                "
              >
                Hot List
              </p>
            </div>
            <!--Hot list-->
            <div class="dijual">
              <div class="card-body py-1 h-100">
                <div class="row d-flex">
                  <p
                    class="card-title mb-0"
                    style="font-weight: bold; color: white"
                  >
                    Cencen Property
                  </p>
                  <div class="d-flex">
                    <div class="flex-grow-1">
                      <p
                        class="card-text mb-0"
                        style="color: white; font-size: 13px"
                      >
                        Jakarta Pusat
                      </p>
                      <p
                        class="badge bg-light text-wrap mb-0"
                        style="font-size: 9px"
                      >
                        Rumah
                      </p>
                      <p
                        class="badge bg-light text-wrap mb-2"
                        style="font-size: 9px"
                      >
                        Furnished
                      </p>
                    </div>
                    <div class="d-flex px-2">
                      <div
                        class="vertical-line"
                        style="
                          border-right: 3px solid white;
                          height: 80%;
                          margin-top: 6px;
                        "
                      ></div>
                    </div>

                    <div class="d-flex align-items-center">
                      <p
                        class="badge bg-light text-wrap p-2 py-3 mb-0"
                        style="font-size: 13px"
                      >
                        Dijual
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="dijual">
              <div class="card-body py-1" style="background-color: white">
                <p
                  class="card-text pb-1"
                  style="margin-bottom: 0; margin-top: 0; font-size: 13px"
                >
                  Rp500.000.000,-
                </p>
                <div class="d-flex">
                  <div class="pe-2">
                    <p style="font-size: 12px">
                      <i class="fa-solid fa-bed"></i> 1+1
                    </p>
                  </div>
                  <div class="pe-2">
                    <p style="font-size: 12px">
                      <i class="fa-solid fa-bath"></i> 2
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--Card Dijual-->
        <!--Card Disewa-->
        <div class="col">
          <div class="card h-100">
            <img
              src="./images/Cencen Property Logo (Sosmed).png"
              class="card-img-top"
              alt="..."
            />
            <div class="disewa">
              <div class="card-body py-1 h-100">
                <div class="row d-flex">
                  <p
                    class="card-title mb-0"
                    style="font-weight: bold; color: white"
                  >
                    Cencen Property
                  </p>
                  <div class="d-flex">
                    <div class="flex-grow-1">
                      <p
                        class="card-text mb-0"
                        style="color: white; font-size: 13px"
                      >
                        Jakarta Pusat
                      </p>
                      <p
                        class="badge bg-light text-wrap mb-0"
                        style="font-size: 9px"
                      >
                        Apartemen
                      </p>
                      <p
                        class="badge bg-light text-wrap mb-2"
                        style="font-size: 9px"
                      >
                        Semi Furnished
                      </p>
                    </div>
                    <div class="d-flex px-2">
                      <div
                        class="vertical-line"
                        style="
                          border-right: 3px solid white;
                          height: 80%;
                          margin-top: 6px;
                        "
                      ></div>
                    </div>

                    <div class="d-flex align-items-center">
                      <p
                        class="badge bg-light text-wrap p-2 py-3 mb-0"
                        style="font-size: 13px"
                      >
                        Disewa
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="disewa">
              <div class="card-body py-1" style="background-color: white">
                <p
                  class="card-text pb-1"
                  style="margin-bottom: 0; margin-top: 0; font-size: 13px"
                >
                  Rp500.000.000,-
                </p>
                <div class="d-flex">
                  <div class="pe-2">
                    <p style="font-size: 12px">
                      <i class="fa-solid fa-bed"></i> 1+1
                    </p>
                  </div>
                  <div class="pe-2">
                    <p style="font-size: 12px">
                      <i class="fa-solid fa-bath"></i> 2
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--Card Disewa-->
        <!--Card Dijual-->
        <div class="col">
          <div class="card h-100">
            <img
              src="./images/Cencen Property Logo (Sosmed).png"
              class="card-img-top"
              alt="..."
            />
            <!--Hot list-->
            <div class="card-img-overlay d-flex justify-content-end">
              <p
                class="badge bg-danger text-wrap"
                style="
                  color: white;
                  font-size: 15px;
                  height: 50px;
                  width: 50px;
                  border-radius: 50%;
                  padding: 10px;
                "
              >
                Hot List
              </p>
            </div>
            <!--Hot list-->
            <div class="dijual">
              <div class="card-body py-1 h-100">
                <div class="row d-flex">
                  <p
                    class="card-title mb-0"
                    style="font-weight: bold; color: white"
                  >
                    Cencen Property
                  </p>
                  <div class="d-flex">
                    <div class="flex-grow-1">
                      <p
                        class="card-text mb-0"
                        style="color: white; font-size: 13px"
                      >
                        Jakarta Pusat
                      </p>
                      <p
                        class="badge bg-light text-wrap mb-0"
                        style="font-size: 9px"
                      >
                        Rumah
                      </p>
                      <p
                        class="badge bg-light text-wrap mb-2"
                        style="font-size: 9px"
                      >
                        Furnished
                      </p>
                    </div>
                    <div class="d-flex px-2">
                      <div
                        class="vertical-line"
                        style="
                          border-right: 3px solid white;
                          height: 80%;
                          margin-top: 6px;
                        "
                      ></div>
                    </div>

                    <div class="d-flex align-items-center">
                      <p
                        class="badge bg-light text-wrap p-2 py-3 mb-0"
                        style="font-size: 13px"
                      >
                        Dijual
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="dijual">
              <div class="card-body py-1" style="background-color: white">
                <p
                  class="card-text pb-1"
                  style="margin-bottom: 0; margin-top: 0; font-size: 13px"
                >
                  Rp500.000.000,-
                </p>
                <div class="d-flex">
                  <div class="pe-2">
                    <p style="font-size: 12px">
                      <i class="fa-solid fa-bed"></i> 1+1
                    </p>
                  </div>
                  <div class="pe-2">
                    <p style="font-size: 12px">
                      <i class="fa-solid fa-bath"></i> 2
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--Card Dijual-->
        <!--Card Disewa-->
        <div class="col">
          <div class="card h-100">
            <img
              src="./images/Cencen Property Logo (Sosmed).png"
              class="card-img-top"
              alt="..."
            />
            <div class="disewa">
              <div class="card-body py-1 h-100">
                <div class="row d-flex">
                  <p
                    class="card-title mb-0"
                    style="font-weight: bold; color: white"
                  >
                    Cencen Property
                  </p>
                  <div class="d-flex">
                    <div class="flex-grow-1">
                      <p
                        class="card-text mb-0"
                        style="color: white; font-size: 13px"
                      >
                        Jakarta Pusat
                      </p>
                      <p
                        class="badge bg-light text-wrap mb-0"
                        style="font-size: 9px"
                      >
                        Apartemen
                      </p>
                      <p
                        class="badge bg-light text-wrap mb-2"
                        style="font-size: 9px"
                      >
                        Semi Furnished
                      </p>
                    </div>
                    <div class="d-flex px-2">
                      <div
                        class="vertical-line"
                        style="
                          border-right: 3px solid white;
                          height: 80%;
                          margin-top: 6px;
                        "
                      ></div>
                    </div>

                    <div class="d-flex align-items-center">
                      <p
                        class="badge bg-light text-wrap p-2 py-3 mb-0"
                        style="font-size: 13px"
                      >
                        Disewa
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="disewa">
              <div class="card-body py-1" style="background-color: white">
                <p
                  class="card-text pb-1"
                  style="margin-bottom: 0; margin-top: 0; font-size: 13px"
                >
                  Rp500.000.000,-
                </p>
                <div class="d-flex">
                  <div class="pe-2">
                    <p style="font-size: 12px">
                      <i class="fa-solid fa-bed"></i> 1+1
                    </p>
                  </div>
                  <div class="pe-2">
                    <p style="font-size: 12px">
                      <i class="fa-solid fa-bath"></i> 2
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--Card Disewa-->
        <!--Card-->
      </div>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://kit.fontawesome.com/ef9fe87b9c.js"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
