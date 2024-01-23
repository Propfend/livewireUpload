<div>
    <div>
            <form action="#" method="POST" wire:submit='store' enctype="multipart/form-data" style="padding: 100px">
                @csrf
                <div class="container">
                    <h2 style="text-align: center">Post</h2>
                    <div class="field">
                        <label class="label" for="title">Título</label>
                        <div class="control">
                          <input class="input" type="text" name="title" placeholder="Título do post" wire:model.live.debounce.500ms='title'>
                          @error('title')
                          <span class="icon-text has-text-danger">
                            <span>{{$message}}</span>
                          </span>
                          @enderror
                        </div>
                      </div>
            
                      <div class="field">
                        <label class="label" for="content">Conteúdo</label>
                        <div class="control">
                          <textarea name="" id="" cols="180" rows="10" name="content" placeholder="Conteúdo do post" wire:model.live.debounce.500ms='content'></textarea>
                          @error('content')
                          <span class="icon-text has-text-danger">
                            <span>{{$message}}</span>
                          </span>
                          @enderror
                        </div>
                      </div>

                      <div class="field">
                        <label class="label" for="photo">Foto</label>
                        <div class="control">
                            <input wire:model='photo' type="file" name="photo" placeholder="Foto" wire:model='photo'>
                          @error('photo')
                          <span class="icon-text has-text-danger">
                            <span>{{$message}}</span>
                          </span>
                          @enderror
                        </div>
                      </div>

                     <br>
                    <button class="button is-light" type="submit">Cadastrar</button>
                      {{-- Animação de Carregamento --}}
                      <div wire:loading>
                        <div class="loadingio-spinner-dual-ball-gt4hbk1r3hp"><div class="ldio-2rcgbbil1nw">
                          <div></div><div></div><div></div>
                          </div></div>
                          <style type="text/css">
                          @keyframes ldio-2rcgbbil1nw-o {
                              0%    { opacity: 1; transform: translate(0 0) }
                             49.99% { opacity: 1; transform: translate(54px,0) }
                             50%    { opacity: 0; transform: translate(54px,0) }
                            100%    { opacity: 0; transform: translate(0,0) }
                          }
                          @keyframes ldio-2rcgbbil1nw {
                              0% { transform: translate(0,0) }
                             50% { transform: translate(54px,0) }
                            100% { transform: translate(0,0) }
                          }
                          .ldio-2rcgbbil1nw div {
                            position: absolute;
                            width: 54px;
                            height: 54px;
                            border-radius: 50%;
                            top: 23px;
                            left: -4px;
                          }
                          .ldio-2rcgbbil1nw div:nth-child(1) {
                            background: #e90c59;
                            animation: ldio-2rcgbbil1nw 0.819672131147541s linear infinite;
                            animation-delay: -0.4098360655737705s;
                          }
                          .ldio-2rcgbbil1nw div:nth-child(2) {
                            background: #46dff0;
                            animation: ldio-2rcgbbil1nw 0.819672131147541s linear infinite;
                            animation-delay: 0s;
                          }
                          .ldio-2rcgbbil1nw div:nth-child(3) {
                            background: #e90c59;
                            animation: ldio-2rcgbbil1nw-o 0.819672131147541s linear infinite;
                            animation-delay: -0.4098360655737705s;
                          }
                          .loadingio-spinner-dual-ball-gt4hbk1r3hp {
                            width: 38px;
                            height: 38px;
                            display: inline-block;
                            overflow: hidden;
                            background: #ffffff;
                          }
                          .ldio-2rcgbbil1nw {
                            width: 100%;
                            height: 100%;
                            position: relative;
                            transform: translateZ(0) scale(0.38);
                            backface-visibility: hidden;
                            transform-origin: 0 0; /* see note above */
                          }
                          .ldio-2rcgbbil1nw div { box-sizing: content-box; }
                          /* generated by https://loading.io/ */
                          </style>
                      </div>
                </div>
            </form>
    </div>
</div>
