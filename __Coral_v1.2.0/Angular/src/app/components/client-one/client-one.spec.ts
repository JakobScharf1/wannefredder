import { ComponentFixture, TestBed } from '@angular/core/testing';

import { ClientOne } from './client-one';

describe('ClientOne', () => {
  let component: ClientOne;
  let fixture: ComponentFixture<ClientOne>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [ClientOne]
    })
    .compileComponents();

    fixture = TestBed.createComponent(ClientOne);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
