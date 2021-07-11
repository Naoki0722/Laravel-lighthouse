<div style="text-align: center">
    <button wire:click="increment">+</button>
    <h1>{{ $count }}</h1>
    <!-- <h2 wire:loading>ローディング中</h2> -->
    <input type="text" wire:model.debounce.500ms="message">
    @if(!$message)
    <p style="color:red;font-weight:bold">文字を入力してください。</p>
    @else
    <p>文字を入力しました。</p>
    <h3>{{ $message }}</h3>
    @endif
    <div>
        <h2>ユーザ一覧</h2>
        <ul>
        @foreach($users as $user)
        <li>{{ $user->name }} <button wire:click="delUser({{ $user->id }})">削除</button>
        @endforeach
        </ul>
    </div>
</div>
