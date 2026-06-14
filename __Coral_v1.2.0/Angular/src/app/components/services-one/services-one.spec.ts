import { ComponentFixture, TestBed } from '@angular/core/testing';

import { ServicesOne } from './services-one';

describe('ServicesOne', () => {
  let component: ServicesOne;
  let fixture: ComponentFixture<ServicesOne>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [ServicesOne]
    })
    .compileComponents();

    fixture = TestBed.createComponent(ServicesOne);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
